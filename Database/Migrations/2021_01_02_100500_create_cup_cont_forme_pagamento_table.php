<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContFormePagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_forme_pagamento', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->string('codice',8)->unique();
			$table->string('nome');
            $table->boolean('immediato')->default(1);
			$table->string('modalita_fatt_el',4)->nullable();
			$table->text('app_info')->nullable();
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
		Schema::drop('cup_cont_forme_pagamento');
	}

}
