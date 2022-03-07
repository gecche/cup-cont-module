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
        Schema::create('cup_cont_tipologie_documenti', function (Blueprint $table) {
            $table->id();
            $table->string('codice', 8)->unique();
            $table->string('nome');
            $table->enum('macrotipo', ['Fattura', 'Ricevuta', 'Nota di credito', 'Quietanza', 'Altro']);
            $table->string('tipo_fatt_el', 4)->nullable();
            $table->string('metodo_calcolo')->nullable();
            $table->boolean('attivo')->default(1);
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
        Schema::drop('cup_cont_tipologie_documenti');
    }

};
