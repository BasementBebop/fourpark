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

Route::get('login', 'LoginController@index');

Route::get('/', 'UsersController@index');
Route::get('dashboard', 'UsersController@index');
Route::get('settings', 'UsersController@edit');

Route::get('users', 'AdminsController@showUsers');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
