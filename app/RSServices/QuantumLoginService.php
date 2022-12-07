<?php
namespace App\RSServices;

use App\Models\QuantumUser as User;
use Illuminate\Support\Facades\Validator;
//use App\Models\ConsoleUser;
use App\RSServices\Models\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
use App\RSServices\Mail\PasswordResetMail;
use Illuminate\Mail\Message;
// use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class QuantumLoginService {
    use SendsPasswordResetEmails/*, ResetsPasswords*/;

    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function register() {
        $this->request['password'] = bcrypt($this->request['password']);
        $user = User::create($this->request->all());
        // $user->assignRole('user');
        return $this->transformer($user);
    }
	
	public function quantum_register() {
        
		/*$email = User::where('email', '=', $this->request['email'])->first();
		print_r($email); exit;
		$phone = User::where('phone', $this->request['phone'])->first();
		if(empty($email)){
			return [
            'rsp_title' => 'NOTIFICATION',
            'rsp_msg' => 'User doesn’t exist.',
			'fetch_flag' => '0'
        ];	
		}
		else{
			return [
            'rsp_title' => 'NOTIFICATION',
            'rsp_msg' => 'User exists.',
			'fetch_flag' => '1'
        ];		
		}*/
		if(!empty($this->request['email'])){
			$input['email'] = $this->request['email'];
			//$input['phone'] = $this->request['phone'];
	
			// Must not already exist in the `email` column of `users` table
			$rules = array('email' => 'unique:quantum.users,email');
			
			$validator = Validator::make($input, $rules);
			
			//print_r();
			
			if ($validator->fails()) {
				return [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'User exists.',
				'fetch_flag' => '1'
			];
			}
			else {
				return [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'User doesn’t exist.',
				'fetch_flag' => '0'
			];		
			}
		}
		
		if(!empty($this->request['phone'])){
			$input['phone'] = $this->request['phone'];
		//$input['phone'] = $this->request['phone'];

		// Must not already exist in the `email` column of `users` table
			$rules = array('phone' => 'unique:quantum.users,phone');
			
			$validator = Validator::make($input, $rules);
			
			//print_r();
			
			if ($validator->fails()) {
				return [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'User exists.',
				'fetch_flag' => '1'
			];
			}
			else {
				return [
				'rsp_title' => 'NOTIFICATION',
				'rsp_msg' => 'User doesn’t exist.',
				'fetch_flag' => '0'
			];		
			}
			
		}
	}
	
	
	
	public function register_social() {
        //$this->request['password'] = bcrypt($this->request['password']);
		/*if($this->request['social_provider'] == 'facebook')
		{
			$this->request['fb_id'] = $this->request['social_id'];	
		}
		if($this->request['social_provider'] == 'twitter')
		{
			$this->request['tw_id'] = $this->request['social_id'];	
		}
		if($this->request['social_provider'] == 'google')
		{
			$this->request['gg_id'] = $this->request['social_id'];	
		}*/
		$email = User::where('email', $this->request['email'])->first();
		if(empty($email)){
			if(!empty($this->request['gg_id']))
		{
			$this->request['register'] = 'Google';
			$user = User::create($this->request->all());
			//$this->request->user()->update($this->request['register']);
			//$user = User::update($this->request['register']);
			//$user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['fb_id']))
		{
			$this->request['register'] = 'Facebook';
			$user = User::create($this->request->all());
			// $user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['tw_id']))
		{
			$this->request['register'] = 'Twitter';
			$user = User::create($this->request->all());
			// $user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['apple_id']))
		{
			$this->request['register'] = 'Apple';
			$user = User::create($this->request->all());
			// $user->assignRole('user');
			return $this->transformer($user);	
		}
        return response()->json(['message' => __('auth.default')], 404);	
		}
		else{
			if(!empty($this->request['gg_id']))
		{
			//$this->request['register'] = 'Google';
			$user = $email->update($this->request->all());
			// $user->assignRole('user');
			//return $this->transformer($user);	
			return $this->transformer($email);
		}
			if(!empty($this->request['fb_id']))
		{
			//$this->request['register'] = 'Facebook';
			$user = $email->update($this->request->all());
			// $user->assignRole('user');
			//return $this->transformer($user);	
			return $this->transformer($email);
		}
			if(!empty($this->request['tw_id']))
		{
			//$this->request['register'] = 'Twitter';
			$user = $email->update($this->request->all());
			// $user->assignRole('user');
			//return $this->transformer($user);	
			return $this->transformer($email);
		}
			if(!empty($this->request['apple_id']))
		{
			//$this->request['register'] = 'Twitter';
			$user = $email->update($this->request->all());
			// $user->assignRole('user');
			//return $this->transformer($user);	
			return $this->transformer($email);
		}
        return response()->json(['message' => __('auth.default')], 404);	
		}
		
    }

    public function login() {
        // Social
        if (isset($this->request['tw_id'])) {
            return $this->login_social('tw_id');
        }
        else if (isset($this->request['fb_id'])) {
            return $this->login_social('fb_id');
        }
        else if (isset($this->request['gg_id'])) {
            return $this->login_social('gg_id');
        }
		else if (isset($this->request['apple_id'])) {
            return $this->login_social('apple_id');
        }
		
		//print_r($this->request->all());exit;
        // Email
        if (\Auth::attempt($this->request->all())) {
            $user = \Auth::user();
			//print_r($user);
		//exit;
            return $this->transformer($user);
        }
		$user = User::where('email', $this->request['email'])->first();
		//print_r($user);
		//exit;
		if(!empty($user)){
			return response()->json(['message' => __('auth.failed')], 401);
		}
		else{
			return response()->json(['message' => __('auth.failedd')], 401);	
		}
        
    }

    function login_social($social) {
		//return $this->register_social();
		
        $user = User::where($social, $this->request[$social])->first();
        if ($user) { // Login
            if (\Auth::loginUsingId($user->id)) {
                return $this->transformer($user);
            }
        }
        /*else { // Register
            if (isset($this->request['email'])) { // If email was passed, check is this email is already registered
                $user = User::where('email', $this->request['email'])->first();
                if ($user) { // Update existing user with new data and login
                    $user->update($this->request->all());

                    if (\Auth::loginUsingId($user->id)) {
                        return $this->transformer($user);
                    }
                }
            }
            return $this->register();
        }*/
		else {
				$this->request['email'] = $this->request['emailid'];
				return $this->register_social();
			}
        return response()->json(['message' => __('auth.failed')], 401);
    }

    function logout() {
        // \Auth::user()->token()->revoke();
        return ['status' => true];
    }

    function profile() {
        return User::findOrFail($this->request->user()->id);
		
    }

    function profileUpdate() {
        if (isset($this->request['password_old'])) {
            if (!\Hash::check($this->request['password_old'], \Auth::user()->password)) {
                return response()->json(['message' => __('auth.failed')], 422);
            }
            $this->request['password'] = bcrypt($this->request['password']);
        }
        $this->request->user()->update($this->request->all());
        return User::findOrFail($this->request->user()->id);
    }
	
	function deleteUser() {
        //$this->request->user()->delete();
		//$user = User::findOrFail($this->request->user()->id);
		//$user->delete();
		//if (isset($this->request['password'])) {
            if (!\Hash::check($this->request['password'], \Auth::user()->password)) {
                return response()->json(['message' => __('auth.failed')], 422);
            }
            //$this->request['password'] = bcrypt($this->request['password']);
        //}
		$this->request->user()->delete();
		return ['status' => true];
    
	}

    function transformer($user) {
        // $user->roles = $user->roles;
        // $user->pair = $user->pair;
        return [
            'token' => $user->createToken('api')->accessToken,
            'login_details' => $user
        ];
    }

     public function forgot_pw_email()
     {
         $this->request->validate([
             'email' => 'required|email'
         ]);
         $user = User::where('email', $this->request['email'])->first();
         if (!$user) {
             return response()->json(['message' => __('passwords.user')], 400);
         }

         $token = $this->broker()->createToken($user);
         $code = mt_rand(100000, 999999);
         $reset = User::where('email', $this->request['email'])->first();
		// print_r($reset);exit;
         if (!$reset) {
             return response()->json(['message' => __('passwords.error_unknown')], 400);
         }
         $reset->code = $code;
         $reset->save();
         Mail::to($user->email)->send(new PasswordResetMail(['code' => $code, 'token' => $token]));
         return [
             'token' => $token,
             'message' => __('passwords.code_email')
         ];
     }

     public function forgot_pw_confirm()
     {
         $this->request->validate([
             'email' => 'required|email',
             'token' => 'required|string',
             'code' => 'required|digits:6'
         ]);
         $user = User::where('email', $this->request->email)->first();
         $reset = PasswordReset::where('email', $this->request->email)->first();

         if (!$this->broker()->tokenExists($user, $this->request->token) || !$reset) {
             return response()->json(['message' => __('passwords.token')], 400);
         }
         if ($reset->code != $this->request->code) {
             $reset->delete();
             return response()->json(['message' => __('passwords.code_wrong')], 400);
         }
         return ['message' => __('passwords.code_accept')];
     }

     public function forgot_pw_reset()
     {
         $this->request->validate([
             'email' => 'required|email',
             'token' => 'required|string',
             'password' => 'required|min:8|confirmed'
         ]);
         $user = User::where('email', $this->request->email)->first();
         $reset = PasswordReset::where('email', $this->request->email)->first();
         if (!$reset) {
             return response()->json(['message' => __('passwords.code_used')], 400);
         }

         $user->password = bcrypt($this->request->password);
         $user->save();

         $reset->delete();
         return ['message' => __('passwords.reset')];
     }

     public function password_reset()
     {
         $input = $this->request->all();
         $arr = [];
         $rules = array(
             'email' => "required|email",
         );
         $validator = \Validator::make($input, $rules);
         if ($validator->fails()) {
             $arr = array("status" => 400, "message" => $validator->errors()->first(), "data" => array());
         } else {
             try {
                 $response = Password::sendResetLink($this->request->only('email'), function (Message $message) {
                     $message->subject($this->getEmailSubject());
                 });
                 switch ($response) {
                     case Password::RESET_LINK_SENT:
                         return \Response::json(array("status" => 200, "message" => trans($response), "data" => array()));
                     case Password::INVALID_USER:
                         return \Response::json(array("status" => 400, "message" => trans($response), "data" => array()));
                 }
             } catch (\Swift_TransportException $ex) {
                 $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
             } catch (\Exception $ex) {
                 $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
             }
         }
         return \Response::json($arr);
     }

    public function online() {
        $this->request->user()->online();
        return ['status' => true];
    }
}
