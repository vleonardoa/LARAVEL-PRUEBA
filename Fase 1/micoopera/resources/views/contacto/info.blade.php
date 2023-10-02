   <!-- Modal contacar cliente -->
   <div class="modal fade" id="contactar{{$cliente->ID_CLIENTE}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Contacto cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  action="{{route('contacto.update', $cliente->ID_CLIENTE)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">Producto</label>
                <select name="idProducto" id="" class="form-control">
                    @foreach ($productos as $producto)
                    <option value="{{$producto->ID_PRODUCTO}}">{{$producto->NOMBRE}}"</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha probable a adquirir producto</label>
                <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">
            </div>
            {{-- <div class="mb-3">
                <label for="" class="form-label">Usuario Contacto</label>
                <input type="text"
                  class="form-control" name="user" id="" aria-describedby="helpId" placeholder="" value="">
              </div> --}}
          <div class="mb-3">
            <label for="" class="form-label">Acuerdo al que se llego</label>
            <input type="text"
              class="form-control" name="acuerdo" id="" aria-describedby="helpId" placeholder="" value="">
          </div>


          <div class="mb-3">
            <label for="" class="form-label">Codigo Asociado</label>
            <input type="text"
              class="form-control" name="codigo" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->ID_CLIENTE}}" disabled>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Contactado  </button>
        </div>
       </form>
      </div>
    </div>
  </div>
