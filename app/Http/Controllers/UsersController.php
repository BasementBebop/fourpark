<?php namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class UsersController extends Controller {

	public function showEmployees()
	{
		$users = User::all();
		return view('employees.all_employees', compact('users'));
	}

	public function index()
	{
		if (Auth::check()) {
			$user = Auth::user();
			return view('dashboard', compact('user'));
		} else {
			return view('login');
		}
	}

	public function create()
	{
		return view('employees.create');
	}

	public function store()
	{
		$alert_setting = Request::input('alert_setting');
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$phone_number = Request::input('phone_number');
		$email = Request::input('email');
		$password = Request::input('password');
		$password_confirmation = Request::input('password_confirmation');

		$password = Hash::make($password);
		$password_confirmation = Hash::make($password_confirmation);

		$user = User::create([$alert_setting, $first_name, $last_name, $phone_number, $email, $password, $password_confirmation]);

		return $alert_setting;
	}

	// public function show($id)
	// {
	// 	// 
	// }

	public function edit($id)
	{
		if (Auth::user()->isAdmin()) {
			$user = User::find($id);
			return view('employees.edit', compact('user'));
		} else {
			return redirect('/');
		}
	}

	public function update($id)
	{
		$user = User::find($id);
		$input = Request::all();
		$user->update($input);
	 
		return redirect('/all_employees');
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		return redirect('/all_employees');
	}

	public function currentUserSettings()
	{
		$user = Auth::user();
		return view('employees.settings', compact('user'));
	}

	public function currentUserUpdateSettings()
	{
		$user = Auth::user();
		$input = Request::all();
		$user->update($input);
	 
		return redirect('/settings');
	}


	public function giveUpSpot()
	{
		$user = Auth::user();
		$open_date = Request::input('open_date');
		$end_date = Request::input('end_date');
		$user->giveUpSpot($open_date, $end_date);
	
		return redirect('/');
	}


}
