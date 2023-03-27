<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_prestazioni', function(Blueprint $table)
		{
            			$table->id();
			$table->unsignedBigInteger('organizzazione_id')->nullable()->index();
			$table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->unsignedBigInteger('sedeoperativa_id')->nullable()->index();
			$table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
			$table->integer('anno')->unsigned();
			$table->integer('numero')->unsigned();
			$table->date('data');
			$table->unsignedBigInteger('tipologia_id')->nullable()->index();
			$table->foreign('tipologia_id')->references('id')->on('cup_cont_tipologie_prestazioni')->onDelete('restrict')->onUpdate('cascade');
			$table->unsignedBigInteger('anagrafica_id')->nullable()->index();
			$table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
			$table->string('descrizione')->nullable();
			$table->text('note')->nullable();
			$table->decimal('valore_unitario',8,2)->nullable();
			$table->integer('quantita')->unsigned()->nullable();
			$table->decimal('imponibile',8,2)->nullable();
			$table->unsignedBigInteger('iva_id')->nullable()->index();
			$table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
			$table->decimal('importo_iva',8,2)->nullable();
			$table->decimal('importo_totale',8,2)->nullable();
			$table->decimal('prog_fatturato',8,2)->nullable();
			$table->text('documenti')->nullable();
			$table->decimal('importo_scontato',8,2)->nullable();
			$table->boolean('chiuso')->nullable();
			$table->nullableTimestamps();
			$table->nullableOwnerships();
            $table->unique(['anno','organizzazione_id','numero'],'cup_cont_presprog');

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

};
