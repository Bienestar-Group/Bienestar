<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aprendiz', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipo_documento');
			$table->bigInteger('documento');
			$table->string('nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->bigInteger('telefono');
			$table->string('email');
			$table->string('direccion');
			$table->string('genero');
			$table->date('fecha_nacimiento');
			$table->string('estado');
			$table->bigInteger('ficha_caracterizacion');
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
		Schema::drop('aprendiz');
	}

}
