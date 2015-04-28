<?php 

use App\Employee;

class EmployeeTest extends TestCase {

	public function testFirstName()
	{
		$employee = new Employee([
			'first_name' => 'Chris'
		]);
		$this->assertEquals('Chris', $employee->first_name);
	}

	public function testLastName()
	{
		$employee = new Employee([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb'
		]);
		$this->assertEquals('Joy-Webb', $employee->last_name);
	}

	public function testChangeAlert()
	{
		$employee = new Employee([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb',
			'alert_setting' => 'sms'
		]);
		$employee->changeAlert('email');
		$this->assertEquals('email', $employee->alert_setting);
	}
}