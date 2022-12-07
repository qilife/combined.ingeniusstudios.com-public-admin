<?php
namespace App\RSServices;

use App\Models\User;
//use App\Models\ConsoleUser;
use App\RSServices\Models\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
use App\RSServices\Mail\PasswordResetMail;
use Illuminate\Mail\Message;
// use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;

class LoginService {
    use SendsPasswordResetEmails/*, ResetsPasswords*/;

    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function register() {
		//print_r(1);exit;
        $this->request['password'] = bcrypt($this->request['password']);
        $user = User::create($this->request->all());
		$flag = $this->request['flag'];
		//print_r($flag); exit;
		if($flag == 1)
		{
			$this->mailchimp($this->request['email'], $this->request['name']);
		}
		
		
        // $user->assignRole('user');
        return $this->transformer($user);
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
		$flag = $this->request['flag'];
		if(empty($email)){
			if(!empty($this->request['gg_id']))
		{
			$this->request['register'] = 'Google';
			$user = User::create($this->request->all());
			//$this->request->user()->update($this->request['register']);
			if($flag == 1)
			{
				$this->mailchimp($this->request['email'], $this->request['name']);
			}
			//$user = User::update($this->request['register']);
			//$user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['fb_id']))
		{
			$this->request['register'] = 'Facebook';
			$user = User::create($this->request->all());
			
			if($flag == 1)
			{
				$this->mailchimp($this->request['email'], $this->request['name']);
			}
			// $user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['tw_id']))
		{
			$this->request['register'] = 'Twitter';
			$user = User::create($this->request->all());
			
			if($flag == 1)
			{
				$this->mailchimp($this->request['email'], $this->request['name']);
			}
			// $user->assignRole('user');
			return $this->transformer($user);	
		}
			if(!empty($this->request['apple_id']))
		{
			$this->request['register'] = 'Apple';
			$user = User::create($this->request->all());
			
			if($flag == 1)
			{
				$this->mailchimp($this->request['email'], $this->request['name']);
			}
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
		
		if($this->request['email'] == 'vishw@example.com') {
			echo '123';
		}
        // Email
        if (\Auth::attempt($this->request->all())) {
           // $user = \Auth::user();
			$user = User::where('email', $this->request['email'])->first();
            return $this->transformer($user);
        }
		$user = User::where('email', $this->request['email'])->first();
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
		//print_r(1); exit;
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
	
	function mailchimp($email, $name)
	{
	$list_id = 'f01e6e79c5';
			$authToken = '34a838ffa6e02729fbab1403bf039a66-us2';
			// The data to send to the API
			
			$postData = array(
				"email_address" => $this->request['email'],
				"status" => "subscribed",
//				"tags" => array(    array(     'name' => "qi coil app user",     'status' => 'active'    )  ),
				'tags'  => array('qi coil app user'),
				"merge_fields" => array(
				"FNAME"=> $this->request['name'])
			);
			
			// Setup cURL
			$ch = curl_init('https://us2.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
			curl_setopt_array($ch, array(
				CURLOPT_POST => TRUE,
				CURLOPT_RETURNTRANSFER => TRUE,
				CURLOPT_HTTPHEADER => array(
					'Authorization: apikey '.$authToken,
					'Content-Type: application/json'
				),
				CURLOPT_POSTFIELDS => json_encode($postData)
			));
			// Send the request
			$response = curl_exec($ch);
			//mail("harry2712@gmail.com", "QICoil mailchimp - combined.ingeniusstudios.com", $flag."\n\n".json_encode($postData)."\n\n".json_encode($response));	
	}

    function transformer($user) {
        // $user->roles = $user->roles;
        // $user->pair = $user->pair;
        return [
            'token' => $user->createToken('api')->accessToken,
            'user' => $user
        ];
    }

    // public function forgot_pw_email()
    // {
    //     $this->request->validate([
    //         'email' => 'required|email'
    //     ]);
    //     $user = User::where('email', $this->request['email'])->first();
    //     if (!$user) {
    //         return response()->json(['message' => __('passwords.user')], 400);
    //     }

    //     $token = $this->broker()->createToken($user);
    //     $code = mt_rand(100000, 999999);
    //     $reset = PasswordReset::where('email', $this->request['email'])->first();
    //     if (!$reset) {
    //         return response()->json(['message' => __('passwords.error_unknown')], 400);
    //     }
    //     $reset->code = $code;
    //     $reset->save();
    //     Mail::to($user->email)->send(new PasswordResetMail(['code' => $code, 'token' => $token]));
    //     return [
    //         'token' => $token,
    //         'message' => __('passwords.code_email')
    //     ];
    // }

    // public function forgot_pw_confirm()
    // {
    //     $this->request->validate([
    //         'email' => 'required|email',
    //         'token' => 'required|string',
    //         'code' => 'required|digits:6'
    //     ]);
    //     $user = User::where('email', $this->request->email)->first();
    //     $reset = PasswordReset::where('email', $this->request->email)->first();

    //     if (!$this->broker()->tokenExists($user, $this->request->token) || !$reset) {
    //         return response()->json(['message' => __('passwords.token')], 400);
    //     }
    //     if ($reset->code != $this->request->code) {
    //         $reset->delete();
    //         return response()->json(['message' => __('passwords.code_wrong')], 400);
    //     }
    //     return ['message' => __('passwords.code_accept')];
    // }

    // public function forgot_pw_reset()
    // {
    //     $this->request->validate([
    //         'email' => 'required|email',
    //         'token' => 'required|string',
    //         'password' => 'required|min:8|confirmed'
    //     ]);
    //     $user = User::where('email', $this->request->email)->first();
    //     $reset = PasswordReset::where('email', $this->request->email)->first();
    //     if (!$reset) {
    //         return response()->json(['message' => __('passwords.code_used')], 400);
    //     }

    //     $user->password = bcrypt($this->request->password);
    //     $user->save();

    //     $reset->delete();
    //     return ['message' => __('passwords.reset')];
    // }

    // public function password_reset()
    // {
    //     $input = $this->request->all();
    //     $arr = [];
    //     $rules = array(
    //         'email' => "required|email",
    //     );
    //     $validator = \Validator::make($input, $rules);
    //     if ($validator->fails()) {
    //         $arr = array("status" => 400, "message" => $validator->errors()->first(), "data" => array());
    //     } else {
    //         try {
    //             $response = Password::sendResetLink($this->request->only('email'), function (Message $message) {
    //                 $message->subject($this->getEmailSubject());
    //             });
    //             switch ($response) {
    //                 case Password::RESET_LINK_SENT:
    //                     return \Response::json(array("status" => 200, "message" => trans($response), "data" => array()));
    //                 case Password::INVALID_USER:
    //                     return \Response::json(array("status" => 400, "message" => trans($response), "data" => array()));
    //             }
    //         } catch (\Swift_TransportException $ex) {
    //             $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
    //         } catch (\Exception $ex) {
    //             $arr = array("status" => 400, "message" => $ex->getMessage(), "data" => []);
    //         }
    //     }
    //     return \Response::json($arr);
    // }

    public function online() {
        $this->request->user()->online();
        return ['status' => true];
    }
}
