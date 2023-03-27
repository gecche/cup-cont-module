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
        Schema::create('cup_cont_documenti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organizzazione_id')->index();
            $table->foreign('organizzazione_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('sedeoperativa_id')->index();
            $table->foreign('sedeoperativa_id')->references('id')->on('cup_anag_sedi')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('anno')->unsigned();
            $table->integer('numero');
            $table->enum('lettera', ['A', 'B', 'C', 'D', 'E', 'F'])->nullable();
            $table->integer('numero_ord');
            $table->date('data');
            $table->unsignedBigInteger('tipologia_id')->index();
            $table->foreign('tipologia_id')->references('id')->on('cup_cont_tipologie_documenti')->onDelete('restrict')->onUpdate('cascade');
            $table->string('tipo_fatt_el', 4)->nullable();
            $table->unsignedBigInteger('anagrafica_id')->index();
            $table->foreign('anagrafica_id')->references('id')->on('cup_anag_anagrafiche')->onDelete('restrict')->onUpdate('cascade');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('formapagamento_id')->nullable()->index();
            $table->foreign('formapagamento_id')->references('id')->on('cup_cont_forme_pagamento')->onDelete('restrict')->onUpdate('cascade');
            $table->string('modalita_fatt_el', 4)->nullable();
            $table->string('iban', 27)->nullable();
            $table->decimal('imponibile', 8, 2)->nullable();
            $table->decimal('contributo_cassa', 8, 2)->nullable();
            $table->decimal('importo_iva', 8, 2)->nullable();
            $table->decimal('ritenuta_acconto', 8, 2)->nullable();
            $table->decimal('marca', 8, 2)->nullable();
            $table->decimal('importo_totale', 8, 2)->nullable();
            $table->decimal('prog_pagato', 8, 2)->nullable();
            $table->boolean('chiuso')->nullable();
            $table->text('dati')->nullable();
            $table->dateTime('xml_at')->nullable();
            $table->string('xml_progressivo_invio', 5)->nullable();
            $table->boolean('contabilizzato')->default(0);
            $table->nullableTimestamps();
            $table->nullableOwnerships();
            $table->unique(['anno', 'sedeoperativa_id', 'tipologia_id', 'numero_ord'], 'cup_cont_docprog');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cup_cont_documenti');
    }

};
