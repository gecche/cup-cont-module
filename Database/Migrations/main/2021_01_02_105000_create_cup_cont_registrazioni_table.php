<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContRegistrazioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_registrazioni', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->integer('organizzazione_id')->unsigned()->index();
			$table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('anno')->unsigned();
			$table->integer('progressivo')->unsigned();
			$table->enum('dare_avere',['D','A']);
			$table->date('data');
			$table->decimal('importo',8,2);
			$table->enum('macrotipo',['DocDare','Incasso','DocAvere']);
			$table->string('descrizione')->nullable();
			$table->integer('sedeoperativa_id')->unsigned()->nullable()->index();
			$table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
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
		Schema::drop('cup_cont_registrazioni');
	}

}
