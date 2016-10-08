<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Vehiculos', function(Blueprint $table)
		{
			$table->foreign('idMarca', 'vehiculos_ibfk_1')->references('idMarca')->on('Marcas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Vehiculos', function(Blueprint $table)
		{
			$table->dropForeign('vehiculos_ibfk_1');
		});
	}

}
