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
Route::get('login', function(){
	return view('auth/login');
});
Route::get('register', function(){
	return view('auth/register');
});

Route::get('shop',"shopController@shop");

/*Route::get('home', function() {
    return view('welcome');
});*/

Route::get('activity',"activityController@activity");

Route::get('ideaBox', "ideaBoxController@ideaBox");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');

/*Route::get('/BDE', 'BDEController@BDE')    
    ->middleware('is_BDE')    
    ->name('BDE');*/
