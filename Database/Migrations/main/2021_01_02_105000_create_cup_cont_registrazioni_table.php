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
        Schema::create('cup_cont_registrazioni', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organizzazione_id')->index();
            $table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('anno')->unsigned();
            $table->integer('numero')->unsigned();
            $table->enum('dare_avere', ['D', 'A']);
            $table->date('data');
            $table->decimal('importo', 8, 2);
            $table->enum('macrotipo', ['DocDare', 'Incasso', 'DocAvere']);
            $table->string('descrizione')->nullable();
            $table->unsignedBigInteger('sedeoperativa_id')->nullable()->index();
            $table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
            $table->nullableTimestamps();
            $table->nullableOwnerships();
            $table->unique(['anno', 'organizzazione_id', 'numero'], 'cup_cont_regprog');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_cont_registrazioni');
    }

};
