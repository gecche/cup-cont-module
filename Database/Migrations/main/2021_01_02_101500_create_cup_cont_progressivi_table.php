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
        Schema::create('cup_cont_progressivi', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['prestazioni', 'documenti', 'registrazioni', 'fatt_el']);
            $table->unsignedBigInteger('organizzazione_id')->index();
            $table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('sedeoperativa_id')->nullable()->index();
            $table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('anno')->unsigned()->nullable()->index();
            $table->unsignedBigInteger('tipodocumento_id')->nullable()->index();
            $table->foreign('tipodocumento_id')->references('id')->on('cup_cont_tipologie_documenti')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ultimo_numero')->nullable();
            $table->integer('ultimo_numero_ord')->nullable();
            $table->date('ultima_data')->nullable();
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

};
