@extends('welcome')
@section('content')



<div class="table-responsive">
    <br>

    <form class="form-inline my-2 my-lg-0">
        <button type="button" class="btn btn-primary  d-inline" data-bs-toggle="modal" data-bs-target="#create">
            Nuevo Cliente
          </button>
        <input name="buscar" class="form-control form-control-sm mr-sm-2 w-25 d-inline" type="search" placeholder="NOMBRE, APELLIDO, ID" aria-label="Search">
        <button class="btn btn-outline-success btn-sm my-2 my-sm-0 d-inline" type="submit">Buscar</button>
    </form>

<br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CODIGO SOCIO</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                {{-- <th scope="col">DIRECCION</th> --}}
                <th scope="col">DPI</th>
                <th scope="col">TELEFONO</th>
                {{-- <th scope="col">CORREO</th> --}}
                {{-- <th scope="col">FECHA_NACIMIENTO</th> --}}
                <th scope="col">ESTADO</th>
                <th scope="col">Hacer Socio</th>
                <th scope="col">Editar</th>
                <th scope="col">Contactar</th>
                <th scope="col">Eliminar</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)

            <tr class="">
                <td scope="row">{{$cliente->ID_CLIENTE}}</td>
                <th>{{$cliente->Socio ? $cliente->Socio->ID_SOCIO : 'N/A'}}</th>
                <td>{{$cliente->NOMBRES}}</td>
                <td>{{$cliente->APELLIDOS}}</td>
                {{-- <td>{{$cliente->DIRECCION}}</td> --}}
                <td>{{$cliente->DPI}}</td>
                <td>{{$cliente->TELEFONO}}</td>
                {{-- <td>{{$cliente->COREO}}</td>
                <td>{{$cliente->FECHA_NACIMIENTO}}</td> --}}
                <td>{{$cliente->ESTADO}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#convertir{{$cliente->ID_CLIENTE}}">
                        convertir
                      </button>
                </td>
                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->ID_CLIENTE}}">
                        Edit
                      </button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactar{{$cliente->ID_CLIENTE}}">
                        Contact
                      </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->ID_CLIENTE}}">
                        Eliminar
                      </button>
                </td>
            </tr>
            @include('socio.info')
            @include('cliente.info')
            @include('contacto.info')
            @endforeach
        </tbody>
    </table>
</div>
@include('cliente.create')

@endsection

