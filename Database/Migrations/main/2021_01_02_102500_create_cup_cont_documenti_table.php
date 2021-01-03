<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContDocumentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_documenti', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->integer('organizzazione_id')->unsigned()->index();
			$table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('sedeoperativa_id')->unsigned()->index();
			$table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('anno')->unsigned();
			$table->string('numero',8);
			$table->date('data');
			$table->integer('tipologia_id')->unsigned()->index();
			$table->foreign('tipologia_id')->references('id')->on('cup_cont_tipologie_documenti')->onDelete('restrict')->onUpdate('cascade');
			$table->string('tipo_fatt_el',4)->nullable();
			$table->integer('anagrafica_id')->unsigned()->index();
			$table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->text('note')->nullable();
			$table->integer('formapagamento_id')->unsigned()->nullable()->index();
			$table->foreign('formapagamento_id')->references('id')->on('cup_cont_forme_pagamento')->onDelete('restrict')->onUpdate('cascade');
			$table->string('modalita_fatt_el',4)->nullable();
			$table->string('iban',27)->nullable();
			$table->decimal('imponibile',8,2)->nullable();
			$table->decimal('importo_iva',8,2)->nullable();
			$table->decimal('importo_totale',8,2)->nullable();
			$table->decimal('prog_pagato',8,2)->nullable();
			$table->boolean('chiuso')->nullable();
			$table->text('dati')->nullable();
			$table->dateTime('xml_at')->nullable();
			$table->string('xml_progressivo_invio',5)->nullable();
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
		Schema::drop('cup_cont_documenti');
	}

}
