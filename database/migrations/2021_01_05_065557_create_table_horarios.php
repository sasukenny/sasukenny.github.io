<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Horarios', function (Blueprint $table) {
            $table->id('hor_id');
            $table->unsignedBigInteger('hor_hos');
            $table->time('hor_ini');
            $table->time('hor_fin');
            $table->integer('hor_act');
            $table->integer('hor_cap');
            $table->boolean('hor_full');
        });

        Schema::table('Horarios', function (Blueprint $table) {
            $table->foreign('hor_hos')->references('hos_id')->on('CentrosDeSalud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Horarios');
    }
}
