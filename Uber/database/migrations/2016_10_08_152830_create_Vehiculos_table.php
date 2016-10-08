<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Vehiculos', function(Blueprint $table)
		{
			$table->integer('idVehiculo', true);
			$table->text('nombreVehiculo', 65535);
			$table->text('anio_modelo', 65535);
			$table->text('color', 65535);
			$table->text('placas', 65535);
			$table->integer('idMarca')->index('idMarca');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Vehiculos');
	}

}
