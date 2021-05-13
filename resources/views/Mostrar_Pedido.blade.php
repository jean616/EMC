@extends("layout")
@section("contenido")
    <table border="1">
        <tr>
            <th>Direccion_Cliente</th>
            <th>Nombre_Producto</th>
            <th>Id_usuario</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($resultados as $PDI)
            <tr>
                <th>{{$PDI["id"]}}</th>
                <th>{{$PDI["Direccion_cliente"]}}</th>
                <th>{{$PDI["Nombre_Producto"]}}</th>
                <th>{{$PDI["Id_usuario"]}}</th>
            </tr>
        @endforeach

    </table>
@endsection
