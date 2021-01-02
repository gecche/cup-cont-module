<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContProgressiviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_progressivi', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->enum('tipo',['prestazioni','documenti','fatt_el']);
			$table->integer('organizzazione_id')->unsigned()->index();
			$table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('sedeoperativa_id')->unsigned()->nullable()->index();
			$table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('anno')->unsigned()->nullable()->index();
			$table->integer('tipodocumento_id')->unsigned()->nullable()->index();
			$table->foreign('tipodocumento_id')->references('id')->on('cup_cont_tipologie_documenti')->onDelete('cascade')->onUpdate('cascade');
			$table->string('ultimo_numero',8)->nullable();
			$table->string('ultimo_progressivo_invio')->nullable();
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
		Schema::drop('cup_cont_progressivi');
	}

}
