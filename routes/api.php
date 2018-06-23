<?php

use Illuminate\Http\Request;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('', 'Api\v1\ApiLoginController@authenticate');
        Route::get('user', 'Api\v1\ApiLoginController@getAuthenticatedUser');
        Route::post('refresh', 'Api\v1\ApiLoginController@refreshToken');
    });
    Route::middleware('auth:api')->group(function () {
        Route::namespace('Api\v1')->group(function () {
            Route::prefix('dashboard')->group(function () {
            });
        });
    });
});
