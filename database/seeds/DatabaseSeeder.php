<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Holiday;
use App\Spot;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('EmployeeTableSeeder');
		$this->call('HolidayTableSeeder');
		$this->call('SpotTableSeeder');
	}

}

class HolidayTableSeeder extends Seeder {

	public function run()
	{
		DB::table('holidays')->delete();

		Holiday::create([
			'holiday' => '2015-12-25'
		]);
		Holiday::create([
			'holiday' => '2015-01-01'
		]);
	}
}

class SpotTableSeeder extends Seeder {

	public function run()
	{
		DB::table('spots')->delete();

		Spot::create([
			'employee_id' => Employee::first()->id,
			'status' => 'available'
		]);
	}
}


class EmployeeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('employees')->delete();

		Employee::create([
			'first_name' => 'Laura',
			'last_name' => 'Atwell',
			'email' => 'fake1@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Aaron',
			'last_name' => 'James',
			'email' => 'fake2@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'sms'
			]);
		Employee::create([
			'first_name' => 'Anne',
			'last_name' => 'Jansa',
			'email' => 'fake3@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'both'
			]);
		Employee::create([
			'first_name' => 'Calvin',
			'last_name' => 'Mesman',
			'email' => 'fake4@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Jeff',
			'last_name' => 'Otis',
			'email' => 'fake5@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'none'
			]);
		Employee::create([
			'first_name' => 'Geoff',
			'last_name' => 'Shauger',
			'email' => 'fake6@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '1',
			'alert_setting' => 'none'
			]);
		Employee::create([
			'first_name' => 'Meredith',
			'last_name' => 'Smith',
			'email' => 'fake7@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'sms'
			]);
		Employee::create([
			'first_name' => 'David',
			'last_name' => 'Steinberg',
			'email' => 'fake8@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '1',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Stephanie',
			'last_name' => 'Reck',
			'email' => 'fake9@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'both'
			]);
		Employee::create([
			'first_name' => 'Rebecca',
			'last_name' => 'Band',
			'email' => 'fake10@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'John',
			'last_name' => 'Rising',
			'email' => 'fake11@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'both'
			]);
		Employee::create([
			'first_name' => 'David',
			'last_name' => 'Alston',
			'email' => 'fake12@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'none'
			]);
		Employee::create([
			'first_name' => 'Erick',
			'last_name' => 'Merchant',
			'email' => 'fake13@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Bryan',
			'last_name' => 'Schoen',
			'email' => 'fake14@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '1',
			'alert_setting' => 'sms'
			]);
		Employee::create([
			'first_name' => 'Eva',
			'last_name' => 'Wong',
			'email' => 'fake15@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'both'
			]);
		Employee::create([
			'first_name' => 'Dennis',
			'last_name' => "O'Connell",
			'email' => 'fake16@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '1',
			'alert_setting' => 'none'
			]);
		Employee::create([
			'first_name' => 'David',
			'last_name' => 'Henry',
			'email' => 'fake17@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'sms'
			]);
		Employee::create([
			'first_name' => 'Mary',
			'last_name' => 'Geyer',
			'email' => 'fake18@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Kelly',
			'last_name' => 'Kitchel',
			'email' => 'fake19@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'email'
			]);
		Employee::create([
			'first_name' => 'Stephen',
			'last_name' => 'Hornbrook',
			'email' => 'fake20@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'sms'
			]);
		Employee::create([
			'first_name' => 'Cameron',
			'last_name' => 'Niles',
			'email' => 'fake21@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'both'
			]);
		Employee::create([
			'first_name' => 'Kenna',
			'last_name' => 'Borgmeier',
			'email' => 'fake22@adpearance.com',
			'active' => '1',
			'password' => '',
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'wants_spot' => '0',
			'admin' => '0',
			'alert_setting' => 'none'
			]);

	}
}
