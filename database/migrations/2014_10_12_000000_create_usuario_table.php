<?php

/**
 * Antonio J.Sánchez 
 * curso 2019/20
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) 
        {
            $table->increments('idUsu');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('email')->unique();
            $table->string('password');

            // por defecto el usuario es cliente
            $table->tinyInteger('perfil')->default(2) ;

            // 
            $table->rememberToken();

            // el siguiente método crea automáticamente los campos
            // created_at y updated_at en la tabla.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
