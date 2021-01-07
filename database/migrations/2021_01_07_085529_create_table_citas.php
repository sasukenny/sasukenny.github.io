<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Citas', function (Blueprint $table) {
            $table->id('cita_id');
            $table->unsignedBigInteger('cita_user');
            $table->unsignedBigInteger('cita_hor');
        });

        Schema::table('Citas', function (Blueprint $table) {
            $table->foreign('cita_user')->references('id')->on('users');
            $table->foreign('cita_hor')->references('hor_id')->on('Horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Citas');
    }
}
