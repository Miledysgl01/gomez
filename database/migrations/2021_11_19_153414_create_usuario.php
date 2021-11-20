<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->String('Nombres');
            $table->String('Apellidos');
            $table->String('Edad');
            $table->String('Tipo de sangre');
            $table->String('Telefono/Celular');
            $table->String('Numero cedula');
            $table->String('¿Tiene hijos pequeños?');
            $table->String('Tipo de serpiente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function Guardar()
    {
        Schema::dropIfExists('usuario');
    }
}
