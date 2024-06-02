 <!-- Modal para crear -->
 <div class="modal fade" id="crearmarca" tabindex="-1" aria-labelledby="crearmarcaLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Nueva Marca</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

                <form action="{{route('marcas.store')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="nombre_marca" class="form-label">Marca: </label>
                            <input type="text" class="form-control" name="nombre_marca" id="nombre_marca" placeholder="" />                   
                        </div>

                        <div class="mb-3">
                            <label for="descripcion_marca" class="form-label">Descripcion: </label>
                            <input type="text" class="form-control" name="descripcion_marca" id="descripcion_marca" placeholder="" />                   
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa-regular fa-floppy-disk"></i> Agregar</button>
                    </div>

                </form>
         </div>
     </div>
 </div>
