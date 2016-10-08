<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetodosPagoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('MetodosPago', function(Blueprint $table)
		{
			$table->integer('idPago', true);
			$table->text('nombrePago', 65535);
			$table->string('cuentaPago', 4);
			$table->string('mm', 2);
			$table->string('dd', 2);
			$table->string('cvv', 3);
			$table->integer('idUsuario')->index('idUsuario');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('MetodosPago');
	}

}
