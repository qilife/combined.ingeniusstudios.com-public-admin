<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegisterSocialRequest;
use App\RSServices\LoginService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(LoginRequest $request) {
        return (new LoginService($request))->login();
    }

    public function register(RegisterRequest $request) {
        return (new LoginService($request))->register();
    }
	
	public function register_social(RegisterSocialRequest $request) {
        return (new LoginService($request))->register_social();
    }

    public function logout(Request $request) {
        return (new LoginService($request))->logout();
    }

    public function profile(Request $request) {
        return (new LoginService($request))->profile();
    }

    public function profileUpdate(ProfileUpdateRequest $request) {
        return (new LoginService($request))->profileUpdate();
    }
	
	public function deleteUser(Request $request) {
        return (new LoginService($request))->deleteUser();
    }

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
}
