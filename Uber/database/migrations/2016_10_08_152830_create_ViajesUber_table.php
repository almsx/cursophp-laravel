<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViajesUberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ViajesUber', function(Blueprint $table)
		{
			$table->integer('idViaje', true);
			$table->timestamp('fechaSolicitud')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('fechaInicio');
			$table->dateTime('fechaFinaliza');
			$table->string('latitudInicio', 40);
			$table->string('longitudInicio', 40);
			$table->string('latitudFinal', 40);
			$table->string('longitudFinal', 40);
			$table->integer('idUsuario')->index('idUsuario');
			$table->integer('idVehiculo')->index('idVehiculo');
			$table->integer('idConductor')->index('idConductor');
			$table->integer('idCategoria')->index('idCategoria');
			$table->integer('idPago')->index('idPago');
			$table->text('costoViaje', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ViajesUber');
	}

}
