<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration {

	public function up()
	{
		Schema::create('holidays', function(Blueprint $table)
		{
			$table->date('holiday');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('holidays');
	}

}
