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
Route::get('/users', 'WelcomeController@showUsers');
Route::get('/settings', 'WelcomeController@showSettings');
Route::get('/login', 'WelcomeController@showLogin');
Route::get('/new_user', 'WelcomeController@showNewUser');
Route::get('/edit_user', 'WelcomeController@editUser');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
