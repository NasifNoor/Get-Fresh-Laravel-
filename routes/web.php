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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::group(['middleware'=>['sess']], function(){
	Route::get('/customer', 'CustomerController@index')->name('Customer.index');
	
	Route::get('/availableProduct', 'CustomerController@availableProduct');
	Route::get('/orderedProduct', 'CustomerController@orderedProduct');
	Route::get('/cartProduct', 'CustomerController@cartedProduct');
	Route::get('/purchaseHistory', 'CustomerController@purchaseHistory');
	Route::get('/employee', 'CustomerController@employee');
	Route::get('/report', 'CustomerController@report');

	Route::get('/admin', 'AdminController@index')->name('Admin.index');
	Route::get('/availableProductAdmin', 'AdminController@availableProduct');
	Route::get('/orders', 'AdminController@orders');
	Route::get('/confirm/{oid}', 'AdminController@confirm');

	//Update profile
	Route::get('/editProfile', 'CustomerController@editProfile');
	Route::post('/editProfile', 'CustomerController@updateInfo');

	//Update password
	Route::get('/changePassword', 'CustomerController@changePassword');
	Route::post('/changePassword', 'CustomerController@updatePassword');



	Route::post('/details/{pid}', 'CustomerController@doComment');
	Route::get('/details/{pid}', 'CustomerController@productDetails');
	Route::get('/order/{pid}', 'CustomerController@orderProduct');
	Route::get('/cart/{pid}', 'CustomerController@cartProduct');
	Route::get('/cencel/{orderid}', 'CustomerController@cencelOrder');
	Route::get('/delete/{cartid}', 'CustomerController@deleteCart');


	Route::get('/availableProduct/search','CustomerController@searchProduct')->name('customer.searchProduct');


});
//Customer registration
Route::get('/customerRegistration', 'RegistrationController@customerRegistration');
Route::post('/customerRegistration', 'RegistrationController@register');

//Customer login
Route::get('/customerLogin', 'LoginController@customerLogin')->name('Login.index');
Route::post('/customerLogin', 'LoginController@verify');

//logout
Route::get('/logout', 'LogoutController@index');