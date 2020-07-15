<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any("/token","Han\TokenController@token");
Route::any("/token2","Han\TokenController@token2");
Route::any("/token3","Han\TokenController@token3");
Route::any("/lianxi","Han\TokenController@lianxi");

