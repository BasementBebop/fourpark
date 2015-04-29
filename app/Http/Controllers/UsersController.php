<?php namespace App\Http\Controllers;

use Auth;
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
		return view('login');
	}

	public function store()
	{
		// 
	}

	// public function show($id)
	// {
	// 	// 
	// }

	public function edit()
	{
		$user = Auth::user();
		return view('employees.settings', compact('user'));
	}

	public function giveUpSpot()
	{
		$user = Auth::user();
		$open_date = Request::input('open_date');
		$end_date = Request::input('end_date');
		$user->giveUpSpot($open_date, $end_date);
	
		return redirect('/');
	}

	public function update()
	{
		$user = Auth::user();
		$input = Request::all();
		$user->update($input);
	 
		return redirect('/settings');
	}

	public function destroy($id)
	{
		//
	}

}
