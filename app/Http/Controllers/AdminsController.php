<?php namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminsController extends Controller {

	// Show all employees for admin only.
	public function showEmployees()
	{
		$employees = Employee::all();
		return view('admin.employees', compact('employees'));
	}
}
