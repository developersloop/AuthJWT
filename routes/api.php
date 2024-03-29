<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'api'],function(){
    Route::post('/register', 'UserController@register');
    Route::post('/auth/login', 'UserController@authenticate');
    Route::get('/open', 'DataController@open');



    Route::group(['middleware' => ['jwt.verify']], function() {
        Route::get('/user'.'UserController@getAuthenticatedUser');
        Route::get('/closed', 'DataController@closed');
    });
});
