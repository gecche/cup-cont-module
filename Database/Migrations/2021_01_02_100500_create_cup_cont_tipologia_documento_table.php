<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContTipologiaDocumentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_tipologia_documento', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->string('codice',8)->unique();
			$table->string('nome');
			$table->enum('macrotipo',['Fattura','Ricevuta','Nota di credito','Quietanza','Altro']);
			$table->string('tipo_fatt_el',4)->nullable();
			$table->nullableTimestamps();
			$table->nullableOwnerships();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cup_cont_tipologia_documento');
	}

}
