<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMetodosPagoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('MetodosPago', function(Blueprint $table)
		{
			$table->foreign('idUsuario', 'metodospago_ibfk_1')->references('idUsuario')->on('Usuarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('MetodosPago', function(Blueprint $table)
		{
			$table->dropForeign('metodospago_ibfk_1');
		});
	}

}
