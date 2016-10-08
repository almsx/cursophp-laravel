<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasCochesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CategoriasCoches', function(Blueprint $table)
		{
			$table->integer('idCategoria', true);
			$table->text('nombreCategoria', 65535);
			$table->string('banderazo', 30)->default('35');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('CategoriasCoches');
	}

}
