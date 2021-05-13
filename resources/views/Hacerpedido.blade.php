@extends("layout")
@section("contenido")
    <table>
        <tr>
            <th>Direccion_Cliente</th>
            <th>Nombre_Producto</th>
            <th>Id_usuario</th>
        </tr>
        <form method="post" action="/ingresara_pedido">
            @csrf
            <tr>
                <th><input type="text" name="Direccion_cliente" required></th>
                <th><input type="text" maxlength="8" name="Nombre_Producto" required></th>
                <th><input type="text" maxlength="8" name="Id_usuario"  required ></th>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
            </tr>
        </form>
    </table>
@endsection
