<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 45);
			$table->string('last_name', 45);
			$table->tinyInteger('active')->default(1);
			$table->tinyInteger('admin')->default(0);
			$table->tinyInteger('wants_spot')->default(0);
			$table->tinyInteger('has_spot')->default(0);
			$table->string('phone_number');
			$table->string('email', 99)->unique();
			$table->enum('alert_setting', ['email', 'sms', 'both', 'none'])->default('email');
			$table->string('password', 200);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
