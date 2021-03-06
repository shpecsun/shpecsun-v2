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

// Auth::routes();
// Route::get('logout','Auth\LoginController@logout');

Route::get('/', 'HomeController@index');
Route::get('stories', 'HomeController@stories');
Route::get('stories/{slug}', 'HomeController@story');
Route::get('slack', 'HomeController@loginSlack');
Route::get('subscribe', function () {
    return view('subscribe');
});
Route::get('membership', function () {
    return view('signup');
});
Route::get('ylf', function () {
    return Redirect::to('http://www.shpecsun.link/ylf');
});

// Route::get('profile',function(){
// 	return view('profile');
// });
