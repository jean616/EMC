<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Cliente_importa;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteImportaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
/*Usuarios*/
Route::view("/Realizar_pedido","Hacerpedido");

Route::get("/Realizar_pedido/{idcolumna}",function (int $idcolumna){
    return view("Realizar_pedido")->with("idcolumna",$idcolumna);
});

Route::post("/ingresara_pedido",[PedidoController::class,"guardar"])->name("ingresara_pedido");

Route::get("/Mostrar_pedido",[PedidoController::class,"mostrar"]);
