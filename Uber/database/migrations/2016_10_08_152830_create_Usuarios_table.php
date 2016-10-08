<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuarios', function(Blueprint $table)
		{
			$table->integer('idUsuario', true);
			$table->string('nombreU', 40);
			$table->string('apellidoPU', 40);
			$table->string('apellidoMU', 40);
			$table->string('telefono', 40);
			$table->integer('idEstado')->index('idEstado');
			$table->text('correoA', 65535);
			$table->text('correoF', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Usuarios');
	}

}
