<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenSpotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('open_spots', function(Blueprint $table)
		{
			$table->integer('spot_id')->unsigned();
			$table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
			$table->integer('employee_id')->unsigned();
			$table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
			$table->integer('assigned_employee_id')->unsigned()->nullable();
			$table->foreign('assigned_employee_id')->references('id')->on('employees')->onDelete('cascade');
			$table->date('open_date')->nullable();
			$table->date('end_date')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('open_spots');
	}

}
