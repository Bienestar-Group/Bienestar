<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regional', function(Blueprint $table)
		{
			$table->increments('id');
<<<<<<< HEAD
			$table->string('nombre_regional');
			$table->string('direccion_regional');
			$table->bigInteger('telefono_regional');
			$table->bigInteger('pbx_regional');
			$table->string('director_regional');
			$table->bigInteger('telefono_director');
			$table->string('estado_regional');
=======
			$table->string('nombre');
			$table->string('direccion');
			$table->bigInteger('telefono');
			$table->bigInteger('pbx');
			$table->string('director');
			$table->bigInteger('telefono_director');
			$table->string('estado');
>>>>>>> cbabf020d4cf8d2efba0d4f890ad0d76ef7175f1
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
		Schema::drop('regional');
	}

}
