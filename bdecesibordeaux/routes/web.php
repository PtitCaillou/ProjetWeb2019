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

Route::get('/', "WelcomeController@Welcome");

Route::get('register', "RegisterController@register");

Route::get('login', "LoginController@login");


Route::get('shop',"shopController@shop");

/*Route::get('home', function() {
    return view('welcome');
});*/

Route::get('activity',"activityController@activity");

Route::get('ideaBox', "ideaBoxController@ideaBox");

Route::get('add.product',"shopController@add");
Route::get('basket', "shopController@basket");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');

Route::get('/BDE', 'BDEController@BDE')    
    ->middleware('is_BDE')    
    ->name('BDE');

Route::get('/student', 'StudentController@student')    
    ->middleware('is_Student')    
    ->name('student');

Route::get('/employee', 'EmployeeController@employee')    
    ->middleware('is_employee')    
    ->name('employee');
