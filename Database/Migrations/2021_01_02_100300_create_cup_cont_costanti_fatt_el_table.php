<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCupContCostantiFattElTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('costanti_fatturazione', function(Blueprint $table)
		{
            			$table->increments('id');
			$table->string('codice');
			$table->string('descrizione',255);
			$table->enum('tipo',['Regime','Cassa','Modalita Pagamento','Tipo Documento','Natura Esenzione','Tipo Ritenuta']);
			$table->text('note')->nullable();
			$table->boolean('attivo')->default(1);
			$table->enum('versione',['1.2','1.2.1'])->default('1.2');



            $table->index(['versione','tipo'],'costanti_fatt_el_versione_tipo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('costanti_fatturazione');
	}

}
