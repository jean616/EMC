<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
    public  function  guardar(Request $dato){

        $usario = new Pedido();
        $usario ->Direccion_cliente = $dato["Direccion_cliente"];
        $usario ->Nombre_Producto = $dato["Nombre_Producto"];
        $usario ->Id_usuario = $dato["Id_usuario"];
        $usario -> save();
        return  "Se guardo";/*redirect("")*/;
    }
}
