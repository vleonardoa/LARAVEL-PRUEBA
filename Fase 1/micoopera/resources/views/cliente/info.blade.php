

  <!-- Modal update cliente -->
  <div class="modal fade" id="edit{{$cliente->ID_CLIENTE}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('cliente.update', $cliente->ID_CLIENTE)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombres</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->NOMBRES}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text"
              class="form-control" name="apellido" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->APELLIDOS}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text"
              class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->DIRECCION}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">DPI</label>
            <input type="text"
              class="form-control" name="dpi" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->DPI}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text"
              class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->TELEFONO}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input type="text"
              class="form-control" name="correo" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->COREO}}">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
       </form>
      </div>
    </div>
  </div>






  <!-- Modal delete cliente-->
  <div class="modal fade" id="delete{{$cliente->ID_CLIENTE}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('cliente.destroy',$cliente->ID_CLIENTE)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
Estas Seguro de eliminar el usuario <strong> {{$cliente->NOMBRES}} {{$cliente->APELLIDOS}}</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
       </form>
      </div>
    </div>
  </div>
