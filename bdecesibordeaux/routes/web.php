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

Route::get('activity',"activityController@activity");

Route::get('ideaBox', "ideaBoxController@ideaBox");
Route::post('add-idea', "ideaBoxController@addIdea");

Route::get('productadd', function(){ return view('addProduct'); });
Route::post('add-product',"shopController@add");
Route::post('hideproduct',"shopController@hide");
Route::get('basket', "shopController@basket");
Route::post('add-basket', "shopController@addBasket");
Route::post('del-basket', "shopController@delBasket");
Route::post('finish-basket', "shopController@finishBasket");
Route::get('add.activity', "activityController@add");
Route::post('store', "activityController@store");
Route::post('storeProduct', "shopController@store");
Route::get('searchShop', "shopController@search");
Route::post('description', "activityController@description");
Route::get('searchActivity', "activityController@search");
/*Route::get('autocompleteShop', 'shopController@autocomplete')->name('autocompleteShop');*/
Route::get('autocomplete-Activity',array('as'=>'autocompleteActivity','uses'=>'activityController@autocomplete'));
Route::get('filter', "shopController@filter");
Route::post('hide', "activityController@hide");
Route::get('warning', "activityController@warning");
Route::post('mail', "ContactController@sendMail");
Route::get('stat', "UserController@status");
Route::post('status', "UserController@updateStatus");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');

Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-student',['middleware'=>'check-permission:student','uses'=>'HomeController@student']);
	Route::get('permissions-employee',['middleware'=>'check-permission:employee','uses'=>'HomeController@employee']);
	Route::get('permissions-bde',['middleware'=>'check-permission:bde','uses'=>'HomeController@bde']);

});
