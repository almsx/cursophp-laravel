<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConductoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Conductores', function(Blueprint $table)
		{
			$table->foreign('idEstado', 'conductores_ibfk_1')->references('idEstado')->on('Estados')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Conductores', function(Blueprint $table)
		{
			$table->dropForeign('conductores_ibfk_1');
		});
	}

}
