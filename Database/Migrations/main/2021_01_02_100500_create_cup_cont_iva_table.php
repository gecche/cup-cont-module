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
        Schema::create('cup_cont_iva', function (Blueprint $table) {
            $table->id();
            $table->string('codice', 8)->unique();
            $table->string('nome');
            $table->decimal('aliquota', 5, 2)->default(0.00);
            $table->boolean('esenzione')->default(0);
            $table->string('descrizione_esenzione')->nullable();
            $table->string('natura_fatt_el', 4)->nullable();
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
        Schema::drop('cup_cont_iva');
    }

};
