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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::group(['middleware'=>'admin', 'namespace'=>'Admin'], function(){     
    Route::get('/welcome','UserController@adminWelcome');     
    Route::get('/home','UserController@adminHome');     
    Route::get('/information','UserController@adminInfo'); 
    Route::get('/pu','UserController@adminUserHome'); 
    Route::get('/pa','UserController@adminAdminHome'); 
});
Route::group(['middleware'=>'user', 'namespace'=>'User'], function(){     
    Route::get('/welcome','UserController@userWelcome');  
    Route::get('/information','UserController@userInfo'); 
    Route::get('/pu','UserController@userUserHome'); 
});
