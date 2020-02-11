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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

/**
 * OPTIONS请求-隔离
 */
Route::options('/{all}', function(Request $request) {
    // 如果是options请求，直接响应
    if (request()->method() == 'OPTIONS') {
        return response()->json([
            'code' => 200,
            'message' => 'OPTIONS',
            'data' => 'OPTIONS',
        ]);
    }
})->where(['all' => '([a-zA-Z0-9-]|/)+']);

//  小程序
include_once("user.php");

//  后台
include_once("admin.php");
