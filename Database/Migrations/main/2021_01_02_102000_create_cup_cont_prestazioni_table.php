<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContPrestazioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_prestazioni', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->integer('organizzazione_id')->unsigned()->nullable()->index();
			$table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('sedeoperativa_id')->unsigned()->nullable()->index();
			$table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('anno')->unsigned();
			$table->integer('numero')->unsigned();
			$table->date('data');
			$table->integer('tipologia_id')->unsigned()->nullable()->index();
			$table->foreign('tipologia_id')->references('id')->on('cup_cont_tipologie_prestazioni')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('anagrafica_id')->unsigned()->nullable()->index();
			$table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->string('descrizione')->nullable();
			$table->text('note')->nullable();
			$table->decimal('valore_unitario',8,2)->nullable();
			$table->integer('quantita')->unsigned()->nullable();
			$table->decimal('imponibile',8,2)->nullable();
			$table->integer('iva_id')->unsigned()->nullable()->index();
			$table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
			$table->decimal('importo_iva',8,2)->nullable();
			$table->decimal('importo_totale',8,2)->nullable();
			$table->decimal('prog_fatturato',8,2)->nullable();
			$table->text('documenti')->nullable();
			$table->decimal('importo_scontato',8,2)->nullable();
			$table->boolean('chiuso')->nullable();
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
		Schema::drop('cup_cont_prestazioni');
	}

}
