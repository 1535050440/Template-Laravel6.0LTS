<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'UserApi\v1'],function(){
    //  需要token
    Route::group(['middleware'=>'api_token'],function(){
        //  用户信息
        Route::group(['prefix' => 'user'], function () {
            //  查询当前用户个人信息
            Route::get('show','UserController@show');
        });
    });

    //  测试
    Route::any('demo', 'DemoController@demo');

});
