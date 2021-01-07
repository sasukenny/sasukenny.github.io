<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProvincias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Provincias', function (Blueprint $table) {
            $table->id('prov_id');
            $table->unsignedBigInteger('reg_id');
            $table->string('prov_name');
        });

        Schema::table('Provincias', function (Blueprint $table) {
            $table->foreign('reg_id')
            ->references('reg_id')
            ->on('Regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Provincias');
    }
}
