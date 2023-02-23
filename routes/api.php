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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/test', [App\Http\Controllers\Controller::class, 'test']);
Route::post('/login', [App\Http\Controllers\Controller::class, 'login']);
Route::post('/web_login', [App\Http\Controllers\Controller::class, 'web_login']);
Route::post('/register', [App\Http\Controllers\Controller::class, 'register']);
Route::post('/send_bot', [App\Http\Controllers\Controller::class, 'send_bot'])->middleware(['throttle:100,5']);;
Route::post('/get_message', [App\Http\Controllers\Controller::class, 'get_message']);
Route::post('/check_message', [App\Http\Controllers\Controller::class, 'c_message']);
Route::post('/searchs', [App\Http\Controllers\Controller::class, 'searchs']);
Route::post('/del_msg', [App\Http\Controllers\Controller::class, 'del_msg']);


Route::post('/socials/wechat', [App\Http\Controllers\AuthorizationsController::class, 'socialStore'])->name('api.socials.authorizations.store'); // 第三方登录
Route::get('/weixin_callback',  [App\Http\Controllers\AuthorizationsController::class, 'weixin_callback']);
