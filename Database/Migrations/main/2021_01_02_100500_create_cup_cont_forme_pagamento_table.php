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
        Schema::create('cup_cont_forme_pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('codice', 8)->unique();
            $table->string('nome');
            $table->boolean('immediato')->default(1);
            $table->string('modalita_fatt_el', 4)->nullable();
            $table->longText('app_info')->nullable();
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
        Schema::drop('cup_cont_forme_pagamento');
    }

};
