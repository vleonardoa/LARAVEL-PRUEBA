@extends('welcome')
@section('content')
<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID_USUARIO</th>
                <th scope="col">COD_SOCIO</th>
                <th scope="col">ID_PRODUCTO</th>

                <th scope="col">FECHA PROBABLE</th>
                <th scope="col">DETALLE</th>
                <th scope="col">FECHA CONTACTO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)

            <tr class="">
                <td scope="row">{{$contacto->ID_USUARIO}}</td>
                <td>{{$contacto->COD_SOCIO}}</td>
                <td>{{$contacto->ID_PRODUCTO}}</td>
                <td>{{$contacto->FECHA_PROBABLE}}</td>
                <td>{{$contacto->DETALLE}}</td>
                <td>{{$contacto->FECHA_CONTACTO}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

