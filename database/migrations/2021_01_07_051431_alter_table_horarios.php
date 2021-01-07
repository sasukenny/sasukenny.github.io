<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Horarios', function (Blueprint $table) {
            $table->date('hor_fecha');
            $table->string('hor_dia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Horarios', function (Blueprint $table) {
            $table->dropColumn('hor_fecha');
            $table->dropColumn('hor_dia');
        });
    }
}
