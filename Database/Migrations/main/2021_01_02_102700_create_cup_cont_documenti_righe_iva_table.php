<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContDocumentiRigheIvaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cup_cont_documenti_righe_iva', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->integer('documento_id')->unsigned()->nullable()->index();
			$table->foreign('documento_id')->references('id')->on('cup_cont_documenti')->onDelete('cascade')->onUpdate('cascade');
			$table->integer('numero_righe')->unsigned()->nullable();
			$table->decimal('imponibile',8,2)->nullable();
			$table->integer('iva_id')->unsigned()->nullable()->index();
			$table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
			$table->string('natura_fatt_el',4)->nullable();
			$table->decimal('importo_iva',8,2)->nullable();
			$table->decimal('importo_totale',8,2)->nullable();
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
		Schema::drop('cup_cont_documenti_righe_iva');
	}

}
