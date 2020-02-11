<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'AdminApi','prefix' => 'admin'],function(){

    //  获取管理员信息
    Route::any('user/info','AdminController@info');

    //  登陆
    Route::any('login','LoginController@login');
    Route::any('logout','LoginController@logout');

    //  用户管理
    Route::group(['prefix' => 'user'],function(){
        Route::get('list','UserController@getUserList');
        Route::get('autograph','UserController@getUserAutographList');
    });

    //  a个性签名管理
    Route::group(['prefix' => 'autograph'],function(){
        Route::get('list','AutographController@index');
    });

    //  图片列表
    Route::group(['prefix' => 'avatar'],function(){
        Route::post('add','AvatarController@getAvatarAdd');
        Route::post('update','AvatarController@getAvatarUpdate');
        Route::any('find','AvatarController@getAvatarFind');
        Route::any('list','AvatarController@getAvatarList');
        Route::get('type','AvatarController@getAvatarType');
        Route::post('setStatus','AvatarController@setAvatarStatus');
    });

    Route::post('upload','FileController@uploadFile');

    //  需要token
    Route::group(['middleware'=>'api_token'],function(){
    });

});
