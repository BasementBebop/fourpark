<?php

Route::get('login', 'LoginController@index');

Route::get('/', 'EmployeesController@index');
Route::get('dashboard', 'EmployeesController@index');
Route::get('settings', 'EmployeesController@edit');

Route::get('all_employees', 'EmployeesController@showEmployees');

Route::resource('employees', 'EmployeesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
