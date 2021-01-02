<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContIvaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_iva', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->string('codice',8)->unique();
			$table->string('nome');
			$table->decimal('aliquota',5,2)->default(0.00);
			$table->boolean('esenzione')->default(0);
			$table->string('descrizione_esenzione')->nullable();
			$table->string('natura_fatt_el',4)->nullable();
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
		Schema::drop('cup_cont_iva');
	}

}
