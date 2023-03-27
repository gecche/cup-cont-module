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
        Schema::create('cup_cont_documenti_righe_iva', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('documento_id')->nullable()->index();
            $table->foreign('documento_id')->references('id')->on('cup_cont_documenti')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('numero_righe')->unsigned()->nullable();
            $table->decimal('imponibile', 8, 2)->nullable();
            $table->unsignedBigInteger('iva_id')->nullable()->index();
            $table->foreign('iva_id')->references('id')->on('cup_cont_iva')->onDelete('restrict')->onUpdate('cascade');
            $table->string('natura_fatt_el', 4)->nullable();
            $table->decimal('importo_iva', 8, 2)->nullable();
            $table->decimal('importo_totale', 8, 2)->nullable();
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

};
