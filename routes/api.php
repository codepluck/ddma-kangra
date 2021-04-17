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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {

    //carousel
    Route::get('slides', ['App\Http\Controllers\Api\CarouselController', 'index']);
    //get menus
    Route::get('menus', ['App\Http\Controllers\Api\MenuController', 'index']);
    //get settings
    Route::get('settings', ['App\Http\Controllers\Api\SettingController', 'index']);
    // get members
    Route::get('members', ['App\Http\Controllers\Api\UserController', 'index']);
    // get posts
    Route::get('posts', ['App\Http\Controllers\Api\PostController', 'index']);
    // get important links
    Route::get('links', ['App\Http\Controllers\Api\LinkController', 'index']);
    //
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('register', 'RegisterController@register')->name('register');
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('email/verify/{hash}', 'VerificationController@verify')->name('verification.verify');
        Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
        Route::get('user', 'AuthenticationController@user')->name('user');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });
});
