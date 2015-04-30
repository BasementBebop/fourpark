<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenSpotsTable extends Migration {

	public function up()
	{
		Schema::create('open_spots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('spot_id')->unsigned();
			$table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('assigned_user_id')->unsigned()->nullable();
			$table->foreign('assigned_user_id')->references('id')->on('users')->onDelete('cascade');
			$table->date('open_date')->nullable();
			$table->date('end_date')->nullable();
			$table->enum('status', ['pending', 'closed'])->default('pending');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('open_spots');
	}

}
