<?php

use Gecche\Breeze\Facades\Schema;
use Gecche\Breeze\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCupContRegistrazioniDocumentiTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cup_cont_registrazioni_documenti', function (Blueprint $table) {

            $table->increments('id');// int(11) NOT NULL,

            $table->integer('resgistrazione_id')->unsigned();// varchar(4) DEFAULT NULL,
            $table->foreign('resgistrazione_id')->references('id')->on('cup_cont_registrazioni')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('documento_id')->unsigned();// varchar(4) DEFAULT NULL,
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

}
