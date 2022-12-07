<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
//use App\Http\Requests\ProfileUpdateRequest;
//use App\Http\Requests\RegisterSocialRequest;
use App\RSServices\LoginService;
use App\Models\RifeUser;
use Illuminate\Http\Request;
//use Auth;
//use Illuminate\Support\Facades\Auth;

class RifeUserController extends Controller
{
   /* public function login(RifeLoginRequest $request) {
        return (new RifeLoginService($request))->login();
    }*/
	
//    public function register(RifeRegisterRequest $request) {
//        return (new RifeLoginService($request))->register();
//    }
//	
//	public function register_social(RegisterSocialRequest $request) {
//        return (new LoginService($request))->register_social();
//    }
//
//    public function logout(Request $request) {
//        return (new LoginService($request))->logout();
//    }
//
//    public function profile(Request $request) {
//        return (new LoginService($request))->profile();
//    }
//
//    public function profileUpdate(ProfileUpdateRequest $request) {
//        return (new LoginService($request))->profileUpdate();
//    }
//	
//	public function deleteUser(Request $request) {
//        return (new LoginService($request))->deleteUser();
//    }

    // public function forgot_pw_email(Request $request) {
    //     return (new LoginService($request))->forgot_pw_email();
    // }

    // public function forgot_pw_confirm(Request $request) {
    //     return (new LoginService($request))->forgot_pw_confirm();
    // }

    // public function forgot_pw_reset(Request $request) {
    //     return (new LoginService($request))->forgot_pw_reset();
    // }

    // public function password_reset(Request $request) {
    //     return (new LoginService($request))->password_reset();
    // }

    public function online(Request $request) {
        return (new LoginService($request))->online();
    }
	
	
	public function login(LoginRequest $request) {
		return (new LoginService($request))->login();
//		return (new RifeLoginService($request))->login();
		die;
		
		 $credentials = $request->only('email', 'password');
 
			if (\Auth::attempt($credentials)) {
//			if (\Auth::attempt($this->request->all())) {
				echo '1';die;
			}
		
		print_r($credentials);die;
		if(empty($_GET['email'])) return ['message' => 'Email address is required'];
		if(empty($_GET['password'])) return ['message' => 'Password is required'];
		
		if(!empty($_GET)) {
			
			$email = $_GET['email'];
			$password = $_GET['password'];
			
			$user = RifeUser::where('email', $email)->first();
			if ($user) { // Login
				if (\Hash::check($password, \Auth::user()->password)) {
					echo 't';die;
					return $this->transformer($user);
				}
			}
			echo 1;die;
		}
	}
	
	function transformer($user) {
        return [
            'token' => $user->createToken('api')->accessToken,
            'user' => $user
        ];
    }
	
	public function register() {
		
//		print_r($_GET);die;
		
		if(empty($_GET['name'])) return ['message' => 'Name is required'];
		if(empty($_GET['email'])) return ['message' => 'Email address is required'];
		if(empty($_GET['password'])) return ['message' => 'Password is required'];
		if(strlen($_GET['password']) < 6) return ['message' => 'Password must be greater than 5 characters'];
		
		if(!empty($_GET)) {
			
			$name = $_GET['name'];
			$email = $_GET['email'];
			$password = bcrypt($_GET['password']);
			$is_active = 1;
/* 			$is_active = $_GET['is_active'];
			$is_admin = $_GET['is_admin'];
			if(!empty($is_active)){
				$is_active = 1;
			}else {
				$is_active = 0;
			}
			if(!empty($is_admin)){
				$is_admin = 1;
			}else {
				$is_admin = 0;
			} */
			
			$RifeUserExist = RifeUser::where('email', $email)->pluck('id')->all();
//			print_r($RifeUserExist);die;
			if(!empty($RifeUserExist)){
				return ['message' => 'User already exists'];	
			}else {
			
				$user = RifeUser::create([
							'name' => $name,
							'email' => $email,
							'password' => $password,
							'is_active' => $is_active,
//							'is_admin' => $is_admin,
						]);	 
				return ['message' => 'User Added Successfully'];
			}
		
		}
	}
}
