<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_cont_costanti_fatt_el', function (Blueprint $table) {
            $table->id();
            $table->string('codice');
            $table->string('descrizione', 255);
            $table->enum('tipo', ['Regime', 'Cassa', 'Modalita Pagamento', 'Tipo Documento', 'Natura Esenzione', 'Tipo Ritenuta']);
            $table->text('note')->nullable();
            $table->boolean('attivo')->default(1);
            $table->enum('versione', ['1.2', '1.2.1'])->default('1.2');


            $table->index(['versione', 'tipo'], 'costanti_fatt_el_versione_tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_cont_costanti_fatt_el');
    }

};
