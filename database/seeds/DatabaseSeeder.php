<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Holiday;
use App\Spot;

class DatabaseSeeder extends Seeder {

	// Runs the database seeds
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('HolidayTableSeeder');
		$this->call('SpotTableSeeder');
	}

}

// Seeds holidays table
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

// Seeds spots table
class SpotTableSeeder extends Seeder {

	public function run()
	{
		DB::table('spots')->delete();

		Spot::create([
			'user_id' => User::all()[1]->id,
			'lot_name' => 'behind',
			'status' => 'available'
		]);
		Spot::create([
			'user_id' => User::all()[10]->id,
			'lot_name' => 'creepy',
			'status' => 'taken'
		]);
		Spot::create([
			'user_id' => User::all()[4]->id,
			'lot_name' => 'behind',
			'status' => 'available'
		]);
		Spot::create([
			'user_id' => User::all()[7]->id,
			'lot_name' => 'creepy',
			'status' => 'taken'
		]);
		Spot::create([
			'user_id' => User::all()[20]->id,
			'lot_name' => 'behind',
			'status' => 'taken'
		]);
		Spot::create([
			'user_id' => User::all()[16]->id,
			'lot_name' => 'creepy',
			'status' => 'available'
		]);
		Spot::create([
			'user_id' => User::all()[13]->id,
			'lot_name' => 'behind',
			'status' => 'available'
		]);
		Spot::create([
			'user_id' => User::all()[19]->id,
			'lot_name' => 'creepy',
			'status' => 'taken'
		]);
		Spot::create([
			'user_id' => User::all()[0]->id,
			'lot_name' => 'creepy',
			'status' => 'taken'
		]);
	}
}

// Seeds users table
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'first_name' => 'Admin',
			'last_name' => 'Admin',
			'email' => 'admin@admin.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'admin' => '1',
			'has_spot' => 1
			]);
		User::create([
			'first_name' => 'Laura',
			'last_name' => 'Atwell',
			'email' => 'fake1@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'wants_spot' => '1',
			]);
		User::create([
			'first_name' => 'Aaron',
			'last_name' => 'James',
			'email' => 'fake2@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'sms'
			]);
		User::create([
			'first_name' => 'Anne',
			'last_name' => 'Jansa',
			'email' => 'fake3@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'wants_spot' => '1',
			'alert_setting' => 'both'
			]);
		User::create([
			'first_name' => 'Calvin',
			'last_name' => 'Mesman',
			'email' => 'fake4@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'wants_spot' => '1',
			]);
		User::create([
			'first_name' => 'Jeff',
			'last_name' => 'Otis',
			'email' => 'fake5@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'none'
			]);
		User::create([
			'first_name' => 'Geoff',
			'last_name' => 'Shauger',
			'email' => 'fake6@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'admin' => '1',
			'alert_setting' => 'none'
			]);
		User::create([
			'first_name' => 'Meredith',
			'last_name' => 'Smith',
			'email' => 'fake7@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'sms'
			]);
		User::create([
			'first_name' => 'David',
			'last_name' => 'Steinberg',
			'email' => 'fake8@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'admin' => '1',
			]);
		User::create([
			'first_name' => 'Stephanie',
			'last_name' => 'Reck',
			'email' => 'fake9@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'both'
			]);
		User::create([
			'first_name' => 'Rebecca',
			'last_name' => 'Band',
			'email' => 'fake10@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			]);
		User::create([
			'first_name' => 'John',
			'last_name' => 'Rising',
			'email' => 'fake11@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'both'
			]);
		User::create([
			'first_name' => 'David',
			'last_name' => 'Alston',
			'email' => 'fake12@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'none'
			]);
		User::create([
			'first_name' => 'Erick',
			'last_name' => 'Merchant',
			'email' => 'fake13@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			]);
		User::create([
			'first_name' => 'Bryan',
			'last_name' => 'Schoen',
			'email' => 'fake14@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'admin' => '1',
			'alert_setting' => 'sms'
			]);
		User::create([
			'first_name' => 'Eva',
			'last_name' => 'Wong',
			'email' => 'fake15@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'both'
			]);
		User::create([
			'first_name' => 'Dennis',
			'last_name' => "O'Connell",
			'email' => 'fake16@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'admin' => '1',
			'alert_setting' => 'none'
			]);
		User::create([
			'first_name' => 'David',
			'last_name' => 'Henry',
			'email' => 'fake17@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'sms'
			]);
		User::create([
			'first_name' => 'Mary',
			'last_name' => 'Geyer',
			'email' => 'fake18@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			]);
		User::create([
			'first_name' => 'Kelly',
			'last_name' => 'Kitchel',
			'email' => 'fake19@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			]);
		User::create([
			'first_name' => 'Stephen',
			'last_name' => 'Hornbrook',
			'email' => 'fake20@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'sms'
			]);
		User::create([
			'first_name' => 'Cameron',
			'last_name' => 'Niles',
			'email' => 'fake21@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'both'
			]);
		User::create([
			'first_name' => 'Kenna',
			'last_name' => 'Borgmeier',
			'email' => 'fake22@adpearance.com',
			'password' => Hash::make('password'),
			'phone_number' => '503-548-1320',
			'has_spot' => '1',
			'alert_setting' => 'none'
			]);

	}
}
