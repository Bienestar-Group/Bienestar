<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centro', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('direccion');
			$table->bigInteger('telefono');
			$table->string('estado');
			$table->bigInteger('regional');
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
		Schema::drop('centro');
	}

}
