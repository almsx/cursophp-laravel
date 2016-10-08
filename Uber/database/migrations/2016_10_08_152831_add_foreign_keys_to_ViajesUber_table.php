<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToViajesUberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ViajesUber', function(Blueprint $table)
		{
			$table->foreign('idUsuario', 'viajesuber_ibfk_1')->references('idUsuario')->on('Usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idVehiculo', 'viajesuber_ibfk_2')->references('idVehiculo')->on('Vehiculos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idConductor', 'viajesuber_ibfk_3')->references('idConductor')->on('Conductores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idCategoria', 'viajesuber_ibfk_4')->references('idCategoria')->on('CategoriasCoches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idPago', 'viajesuber_ibfk_5')->references('idPago')->on('MetodosPago')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ViajesUber', function(Blueprint $table)
		{
			$table->dropForeign('viajesuber_ibfk_1');
			$table->dropForeign('viajesuber_ibfk_2');
			$table->dropForeign('viajesuber_ibfk_3');
			$table->dropForeign('viajesuber_ibfk_4');
			$table->dropForeign('viajesuber_ibfk_5');
		});
	}

}
