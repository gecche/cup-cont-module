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
        Schema::create('cup_cont_documenti_righe', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_id')->index();
            $table->foreign('documento_id')->references('id')->on('cup_cont_documenti')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('progressivo')->unsigned()->default(1);
            $table->decimal('valore_unitario', 8, 2)->nullable();
            $table->integer('quantita')->unsigned()->nullable();
            $table->decimal('imponibile', 8, 2);
            $table->unsignedBigInteger('iva_id')->index();
            $table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
            $table->string('natura_fatt_el', 4)->nullable();
            $table->decimal('importo_iva', 8, 2);
            $table->decimal('importo_totale', 8, 2);
            $table->unsignedBigInteger('prestazione_id')->nullable()->index();
            $table->foreign('prestazione_id')->references('id')->on('cup_cont_prestazioni')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::drop('cup_cont_documenti_righe');
    }

};
