<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContTipologiePrestazioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_tipologie_prestazioni', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->string('codice',8)->nullable()->unique();
			$table->string('descrizione')->nullable();
			$table->decimal('imponibile',7,2)->nullable();
			$table->integer('iva_id')->unsigned()->nullable()->index();
			$table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
			$table->boolean('imponibile_affiliazione')->default(0);
			$table->boolean('attivo')->default(1);
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
		Schema::drop('cup_cont_tipologie_prestazioni');
	}

}
