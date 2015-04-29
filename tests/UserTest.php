<?php 

use App\User;

class UserTest extends TestCase {

	public function testFirstName()
	{
		$user = User::create([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb',
			'alert_setting' => 'sms',
			'phone_number' => '1112223333',
			'email' => 'fake4@fake.com',
			'password' => Hash::make('password')
		]);
		$this->assertEquals('Chris', $user->first_name);
	}

	public function testLastName()
	{
		$user = User::create([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb',
			'alert_setting' => 'sms',
			'phone_number' => '1112223333',
			'email' => 'fake@fake.com',
			'password' => Hash::make('password')
		]);
		$this->assertEquals('Joy-Webb', $user->last_name);
	}

	public function testChangeAlert()
	{
		$user = new User([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb',
			'alert_setting' => 'sms',
			'phone_number' => '1112223333',
			'email' => 'fake@fake.com',
			'password' => Hash::make('password')
		]);
		$user->changeAlert('email');
		$user->update();
		$this->assertEquals('sms', $user->alert_setting);
	}

	public function testIsAdmin()
	{
		$user = User::create([
			'first_name' => 'Chris',
			'last_name' => 'Joy-Webb',
			'alert_setting' => 'sms',
			'phone_number' => '1112223333',
			'email' => 'fake@fake.com',
			'password' => Hash::make('password')
		]);
		$this->assertEquals(false, $user->isAdmin());
	}
}