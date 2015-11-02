<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('company', 'CompanyController');

Route::get('company/{id}/delete', 'CompanyController@delete');

Route::resource('product', 'ProductController');

Route::get('product/{id}/delete', 'ProductController@delete');

Route::resource('campaign', 'CampaignController');

Route::get('campaign/{id}/delete', 'CampaignController@delete');

Route::resource('customer', 'CustomerController');

Route::get('customer/{id}/delete', 'CustomerController@delete');

Route::resource('media', 'MediaController');

Route::get('media/{id}/delete', 'MediaController@delete');

Route::resource('promotion', 'PromotionController');

Route::get('promotion/{id}/delete', 'PromotionController@delete');

Route::resource('order', 'OrderController');

Route::get('order/{id}/delete', 'OrderController@delete');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
