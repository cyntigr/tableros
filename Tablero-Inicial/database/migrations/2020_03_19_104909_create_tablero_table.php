<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablero', function (Blueprint $table) 
        {
            $table->increments('idTab') ;
            $table->string('nombre', 150) ;
            $table->date('fecha') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablero');
    }
}
