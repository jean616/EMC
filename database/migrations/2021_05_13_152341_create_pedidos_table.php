<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->String("Direccion_cliente",100);
            $table->String("Nombre_Producto",100);

        });
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("id_usuario");
            $table->foreign("id_usuario")->references("id")->on("cliente_importas")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
