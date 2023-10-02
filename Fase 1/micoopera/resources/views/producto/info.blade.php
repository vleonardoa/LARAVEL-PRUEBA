

  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$producto->ID_PRODUCTO}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('producto.update',$producto->ID_PRODUCTO)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre Producto</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$producto->NOMBRE}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$producto->DESCRIPCION}}">
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



  <!-- Modal delete -->
  <div class="modal fade" id="delete{{$producto->ID_PRODUCTO}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('producto.destroy',$producto->ID_PRODUCTO)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
Estas Seguro de eliminar el producto <strong> {{$producto->NOMBRE}}</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
       </form>
      </div>
    </div>
  </div>
