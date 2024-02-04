 <!-- Modal para actualizar -->
 <div class="modal fade" id="editarmarca{{$marca->id_marca}}" tabindex="-1" aria-labelledby="editarmarcaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Marca</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

               <form action="{{route('marcas.update',$marca->id_marca)}}" method="post" autocomplete="off">
                   @csrf
                   @method('PUT')
                   <div class="modal-body">

                       <div class="mb-3">
                           <label for="nombre_marca" class="form-label">Marca: </label>
                           <input type="text" class="form-control" name="nombre_marca" id="nombre_marca" value="{{$marca->nombre_marca}}" />                   
                       </div>

                       <div class="mb-3">
                           <label for="descripcion_marca" class="form-label">Descripcion: </label>
                           <input type="text" class="form-control" name="descripcion_marca" id="descripcion_marca" value="{{$marca->descripcion_marca}}" />                   
                       </div>

                   </div>

                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                       <button type="submit" class="btn btn-primary">Actualizar</button>
                   </div>

               </form>
        </div>
    </div>
</div>

 <!-- Modal para eliminar -->
 <div class="modal fade" id="eliminarmarca{{$marca->id_marca}}" tabindex="-1" aria-labelledby="eliminarmarcaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Datos de Marca</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

               <form action="{{route('marcas.destroy',$marca->id_marca)}}" method="post" autocomplete="off">
                   @csrf
                   @method('DELETE')
                   <div class="modal-body">

                       <div class="mb-3">
                          <p>
                            ¿Está usted seguro de eliminar a la marca <strong>{{$marca->nombre_marca}}</strong>?
                          </p>
                       </div>
                   </div>

                   <div class="modal-footer">
                       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                       <button type="submit" class="btn btn-primary">Confirmar</button>
                   </div>

               </form>
        </div>
    </div>
</div>
