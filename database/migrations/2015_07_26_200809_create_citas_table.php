<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citas', function(Blueprint $table)
		{
			$table->increment('ID_CITA');
			$table->string('FECHA');
			$table->string('HORA_INICIO');
			$table->string('HORA_FIN');
			$table->string('ESTADO');
			$table->int('PROFESIONAL');
			$table->int('APRENDIZ');
			$table->int('PROBLEMATICA');
			$table->string('TIPO_CITA');
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
		Schema::drop('citas');
	}

}
