<?php

Route::get('login', 'LoginController@index');

Route::get('/', 'UsersController@index');
Route::get('dashboard', 'UsersController@index');
Route::get('settings', 'UsersController@edit');

Route::get('all_employees', 'UsersController@showEmployees');

Route::resource('employees', 'UsersController', ['except' => 'show']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
