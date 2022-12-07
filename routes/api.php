<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('user')->group(function () {
    Route::get('login', 'API\UserController@login');
    Route::get('register', 'API\UserController@register');
	Route::get('register_social', 'API\UserController@register_social');
    // Route::get('password/email', 'API\UserController@forgot_pw_email');
    // Route::get('password/confirm', 'API\UserController@forgot_pw_confirm');
    // Route::get('password/reset', 'API\UserController@forgot_pw_reset');
    // Route::get('password/reset', 'API\UserController@password_reset');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('profile', 'API\UserController@profile');
        Route::get('profile/update', 'API\UserController@profileUpdate');
        Route::get('logout', 'API\UserController@logout');
		Route::get('profile/delete', 'API\UserController@deleteUser');	
    });
});

Route::prefix('quantum_user')->group(function () {
    Route::get('login', 'API\QuantumUserController@login');
    Route::get('register', 'API\QuantumUserController@register');
	Route::get('check_user', 'API\QuantumUserController@quantum_register');
	//Route::get('quantum_register_phone', 'API\QuantumUserController@quantum_register_phone');
	Route::get('register_social', 'API\QuantumUserController@register_social');
   // Route::get('password/email', 'API\QuantumUserController@forgot_pw_email');
   // Route::get('password/confirm', 'API\QuantumUserController@forgot_pw_confirm');
   // Route::get('password/reset', 'API\QuantumUserController@forgot_pw_reset');
    // Route::get('password/reset', 'API\UserController@password_reset');

    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('profile', 'API\QuantumUserController@profile');
        Route::get('profile/update', 'API\QuantumUserController@profileUpdate');
        Route::get('logout', 'API\QuantumUserController@logout');
		Route::get('profile/delete', 'API\QuantumUserController@deleteUser');	
    });
});

Route::prefix('rife/user')->group(function () {
    Route::get('login', 'API\RifeUserController@login');
    Route::get('register', 'API\RifeUserController@register');
	Route::get('user_check', 'API\RifeUserController@user_check');
	
//	Route::post('riferegister', 'API\HomeController@rife_register');
//	Route::post('rifeusercheck', 'API\HomeController@rife_usercheck');

    /* Route::group(['middleware' => 'auth:api'], function() {
        Route::get('profile', 'API\RifeUserController@profile');
        Route::get('profile/update', 'API\RifeUserController@profileUpdate');
        Route::get('logout', 'API\RifeUserController@logout');
		Route::get('profile/delete', 'API\RifeUserController@deleteUser');	
    }); */
});

Route::get('home', 'API\HomeController@index');
Route::get('quantumhome', 'API\HomeController@quantum');
Route::get('landing', 'API\HomeController@quantum_landing');
Route::get('tiers', 'API\HomeController@tiers');
Route::get('tags', 'API\HomeController@tags');
Route::get('categories', 'API\HomeController@categories');
Route::get('albums', 'API\HomeController@albums');
Route::get('programs', 'API\HomeController@programs');
Route::get('playlists', 'API\HomeController@playlists');
Route::get('discover', 'API\HomeController@discover');
Route::get('apk', 'API\HomeController@apk');
Route::any('purchase', 'API\HomeController@purchase');
Route::post('saveplaylist', 'API\HomeController@save_playlist');
Route::post('listplaylist', 'API\HomeController@list_playlist');
Route::post('deleteplaylist', 'API\HomeController@delete_playlist');
Route::get('support_form', 'API\HomeController@support_form');
Route::get('image', 'API\HomeController@image');


Route::get('savefreealbum', 'API\HomeController@saveFreeAlbum');
Route::get('checkfreealbum', 'API\HomeController@checkFreeAlbum');

Route::get('instructions', 'API\HomeController@instructions');
Route::get('savemood', 'API\HomeController@save_mood');
Route::get('getmood', 'API\HomeController@get_mood');
Route::get('getrandomalbum', 'API\HomeController@random_albums');

Route::post('subscription', 'API\HomeController@subscription');
