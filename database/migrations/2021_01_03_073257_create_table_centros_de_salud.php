<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCentrosDeSalud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CentrosDeSalud', function (Blueprint $table) {
            $table->id('hos_id');
            $table->unsignedBigInteger('hos_dist');
            $table->string('hos_add');
            $table->string('hos_name');
            $table->integer('hos_cap');
        });

        Schema::table('CentrosDeSalud', function (Blueprint $table) {
            $table->foreign('hos_dist')->references('dist_id')->on('Distritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CentrosDeSalud');
    }
}
