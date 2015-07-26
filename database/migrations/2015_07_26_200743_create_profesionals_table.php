<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesionals', function(Blueprint $table)
		{
			$table->increment('ID_PROFESIONAL');
			$table->string('TIPO_DOCUMENTO');
			$table->int('DOCUMENTO');
			$table->string('NOMBRE');
			$table->string('PRIMER_APELLIDO');
			$table->string('SEGUNDO_APELLIDO');
			$table->int('TELEFONO');
			$table->string('EMAIL');
			$table->string('DIRECCION');
			$table->string('FECHA_NACIMIENTO');
			$table->string('ESTADO');
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
		Schema::drop('profesionals');
	}

}
