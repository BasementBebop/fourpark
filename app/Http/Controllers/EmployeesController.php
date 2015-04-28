<?php namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmployeesController extends Controller {

	public function showEmployees()
	{
		$employees = Employee::all();
		return view('employees.all_employees', compact('employees'));
	}

	public function index()
	{
		return view('dashboard');
	}

	public function create()
	{
		//
	}

	public function store()
	{
		$input = Request::all();
		Employee::create($input);
		return Redirect::route('admin.employees');
	}

	public function show($id)
	{
		$employee = Employee::find($id);
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
