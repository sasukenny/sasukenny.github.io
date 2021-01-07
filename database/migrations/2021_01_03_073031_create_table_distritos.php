<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDistritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Distritos', function (Blueprint $table) {
            $table->id('dist_id');
            $table->unsignedBigInteger('prov_id');
            $table->string('dist_name');
        });

        Schema::table('Distritos', function (Blueprint $table) {
            $table->foreign('prov_id')->references('prov_id')->on('Provincias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Distritos');
    }
}
