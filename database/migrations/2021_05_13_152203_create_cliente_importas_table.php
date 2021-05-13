<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteImportasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_importas', function (Blueprint $table) {
            $table->id();
            $table->String("nombre",50);
            $table->String("apellido",100);
            $table->String("direccion",100);
            $table->String("Contraseña",100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_importas');
    }
}
