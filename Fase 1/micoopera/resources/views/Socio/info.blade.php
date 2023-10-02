
  <!-- Modal convertir cliente -->
  <div class="modal fade" id="convertir{{$cliente->ID_CLIENTE}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('socio.update', $cliente->ID_CLIENTE)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
            Esta Seguro que quiere volver socio a {{$cliente->NOMBRES}} {{$cliente->APELLIDOS}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
       </form>
      </div>
    </div>
  </div>
