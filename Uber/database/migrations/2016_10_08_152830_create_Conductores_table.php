<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConductoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Conductores', function(Blueprint $table)
		{
			$table->integer('idConductor', true);
			$table->string('nombre', 40);
			$table->string('aPaterno', 40);
			$table->string('aMaterno', 40);
			$table->integer('idEstado')->index('idEstado');
			$table->string('telefono', 10);
			$table->text('fotografia', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Conductores');
	}

}
