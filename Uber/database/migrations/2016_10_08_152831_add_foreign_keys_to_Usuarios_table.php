<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Usuarios', function(Blueprint $table)
		{
			$table->foreign('idEstado', 'usuarios_ibfk_1')->references('idEstado')->on('Estados')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Usuarios', function(Blueprint $table)
		{
			$table->dropForeign('usuarios_ibfk_1');
		});
	}

}
