<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/','GuestController');
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::get('logout','LoginController@getLogout');
Route::resource('admin','AdminController',['only'=>['index','destroy']]);

/*Route::get('test',function (){
   return Hash::make("admin");
});*/
