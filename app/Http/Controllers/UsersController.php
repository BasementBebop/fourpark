<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsersController extends Controller {

	public function showEmployees()
	{
		$employees = User::all();
		return view('employees.all_employees', compact('employees'));
	}

	public function index()
	{
		return view('dashboard');
	}

	public function create()
	{
		return view('login');
	}

	public function store()
	{
		$input = Request::all();
		User::create($input);
		return Redirect::route('admin.employees');
	}

	public function show($id)
	{
		$employee = User::find($id);
		return view('employees.settings', compact('employee'));
	}

	public function edit() // need id still
	{
		return view('employees.settings');
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$project->update($input);
		return Redirect::route('projects.show');
	}

	public function destroy($id)
	{
		//
	}

}
