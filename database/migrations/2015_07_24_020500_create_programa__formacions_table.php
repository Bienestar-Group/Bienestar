<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaFormacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programa_formacion', function(Blueprint $table)
		{
			$table->bigInteger('id');
			$table->string('nombre');
			$table->string('duracion');
			$table->string('nivel');
			$table->string('modalidad');
			$table->string('descripcion');
			$table->string('estado');
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
		Schema::drop('programa_formacion');
	}

}
