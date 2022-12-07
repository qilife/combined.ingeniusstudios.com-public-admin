<?php
namespace App\RSServices;

use App\Models\RifeUser as User;
use App\RSServices\Models\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Mail;
use App\RSServices\Mail\PasswordResetMail;
use Illuminate\Mail\Message;
// use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Auth;

class RifeLoginService {
    use SendsPasswordResetEmails/*, ResetsPasswords*/;

    private $request;

    public function __construct($request)
    {
		
//		print_r($request);die;
        $this->request = $request;
    }

    public function register() {
		//print_r($this->request);exit;
        $this->request['password'] = bcrypt($this->request['password']);
        $user = RifeUser::create($this->request->all());
		
        return $this->transformer($user);
    }
	
    public function login() {

        // Email
//		print_r($this->request->all());
//		print_r($this->request->email);die;
//		$user = RifeUser::where('email', $this->request->email)->first();
		
		/* if (\Auth::attempt(['email'=>$this->request->email,'password'=>$this->request->password])) {
			echo '1';
		}
		print_r(\Auth::user());die; */
		
		
        if (\Auth::attempt($this->request->all())) {
			$user = \Auth::user();
            return $this->transformer($user);
        }
		echo '123';die;
		$user = User::where('email', $this->request->email)->first();
		print_r($user);die;
		if(!empty($user)){
			return response()->json(['message' => __('auth.failed')], 401);
		}
		else{
			return response()->json(['message' => __('auth.failedd')], 401);	
		}
        
    }

    function logout() {
        // \Auth::user()->token()->revoke();
        return ['status' => true];
    }

	function deleteUser() {
        //$this->request->user()->delete();
		//$user = RifeUser::findOrFail($this->request->user()->id);
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
            'user' => $user
        ];
    }
	
    public function online() {
        $this->request->user()->online();
        return ['status' => true];
    }
}
