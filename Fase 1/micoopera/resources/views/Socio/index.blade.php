@extends('welcome')
@section('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo Producto
  </button>


<div class="table-responsive">
    <br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID_PRODUCTO</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                {{-- <th scope="col">PRECIO</th> --}}
                <th scope="col">ESTADO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)

            <tr class="">
                <td scope="row">{{$producto->ID_PRODUCTO}}</td>
                <td>{{$producto->NOMBRE}}</td>
                <td>{{$producto->DESCRIPCION}}</td>
                <td>{{$producto->ESTADO}}</td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->ID_PRODUCTO}}">
                        Editar
                      </button>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->ID_PRODUCTO}}">
                        Eliminar
                      </button>


                </td>
            </tr>
            @include('producto.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('producto.create')

@endsection

