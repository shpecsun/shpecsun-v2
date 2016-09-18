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

Route::get('/', 'HomeController@index');
Route::get('stories', 'HomeController@stories');
Route::get('stories/{slug}','HomeController@story');
Route::get('slack','HomeController@loginSlack');
Auth::routes();
Route::get('profile',function(){
	return view('profile');
});
