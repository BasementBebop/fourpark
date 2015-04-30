<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsTable extends Migration {

	public function up()
	{
		Schema::create('spots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->enum('lot_name', ['creepy', 'behind']);
			$table->enum('status', ['available', 'taken'])->default('taken');
			$table->dateTime('time_notification_sent')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('spots');
	}

}
