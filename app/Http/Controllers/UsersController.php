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
			$released_days = $user->openSpots();
			return view('dashboard', compact('user', 'released_days'));
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
		$input = Request::all();
		$password = $input['password'];
		$password = Hash::make($password);
		$input['password'] = $password;
		$user = User::create($input);
		return redirect('/all_employees');
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
