<?php

Route::get('login', 'LoginController@index');

Route::get('/', 'UsersController@index');
Route::get('dashboard', 'UsersController@index');
Route::get('settings', 'UsersController@currentUserSettings');

Route::patch('settings', 'UsersController@currentUserUpdateSettings');


Route::get('all_employees', 'UsersController@showEmployees');

Route::patch('dashboard', 'UsersController@giveUpSpot');
Route::get('dashboard', 'UsersController@reclaimSpot');


Route::resource('employees', 'UsersController', ['except' => 'show']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
