<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');
    Route::get('accounts', 'AccountController@index');
    Route::post('accounts/store', 'AccountController@store');
    Route::put('accounts/{id}', 'AccountController@update');
    Route::delete('accounts/{id}', 'AccountController@destroy');
    Route::get('accounts', 'AccountController@index');
    Route::get('types','TypeController@index');
    Route::get('auth/redirect', 'AuthController@redirect');
    Route::get('auth/callback', 'AuthController@callback');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
