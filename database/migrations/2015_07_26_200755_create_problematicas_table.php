<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblematicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('problematicas', function(Blueprint $table)
		{
			
			$table->increment('ID_PROBLEMATICA');
			$table->string('NOMBRE');
			$table->string('TIPO_PROBLEMATICA');
			$table->string('ESTADO');
			$table->int('AREA');
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
		Schema::drop('problematicas');
	}

}
