<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {

	public function showEmployees()
	{
		$users = User::all();
		return view('employees.all_employees', compact('users'));
	}

	public function index()
	{
		if (Auth::check()) {
			return view('dashboard');
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

	public function show($id)
	{
		// 
	}

	public function edit()
	{
		$user = Auth::user();
		return view('employees.settings', compact('user'));
	}

	public function update($id)
	{
		$user = Auth::user();
		$input = array_except(Input::all(), '_method');
		$user->update($input);
	 
		return Redirect::route('employees.settings');
	}

	public function destroy($id)
	{
		//
	}

}
