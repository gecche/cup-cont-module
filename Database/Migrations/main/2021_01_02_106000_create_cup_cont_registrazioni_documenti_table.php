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
        Schema::create('cup_cont_registrazioni_documenti', function (Blueprint $table) {

            $table->id();// int(11) NOT NULL,

            $table->unsignedBigInteger('registrazione_id');// varchar(4) DEFAULT NULL,
            $table->foreign('registrazione_id')->references('id')->on('cup_cont_registrazioni')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('documento_id');// varchar(4) DEFAULT NULL,
            $table->foreign('documento_id')->references('id')->on('cup_cont_documenti')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_cont_registrazioni_documenti');
    }

};
