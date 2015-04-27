<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 45);
			$table->string('last_name', 45);
			$table->tinyInteger('active');
			$table->tinyInteger('admin');
			$table->tinyInteger('wants_spot');
			$table->tinyInteger('has_spot');
			$table->string('phone_number');
			$table->string('email', 99)->unique();
			$table->enum('alert_setting', ['email', 'sms', 'both', 'none']);
			$table->string('password', 200);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}

}
