<!-- Modal para crear -->
<div class="modal fade" id="editarcliente{{$cliente->id_cliente}}" tabindex="-1" aria-labelledby="editarclienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos del Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('clientes.update',$cliente->id_cliente)}}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="cedula_cliente" class="form-label">Cédula: </label>
                        <input type="text" class="form-control" name="cedula_cliente" id="cedula_cliente" value="{{$cliente->cedula_cliente}}"/>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre_cliente" class="form-label">Cliente: </label>
                            <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente" value="{{$cliente->nombre_cliente}}"/>
                        </div>
                        <div class="col">
                            <label for="edad_cliente" class="form-label">Edad: </label>
                            <input type="number" class="form-control" name="edad_cliente" id="edad_cliente" value="{{$cliente->edad_cliente}}"/>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo_cliente" class="form-label">Correo: </label>
                        <input type="email" class="form-control" name="correo_cliente" id="correo_cliente" value="{{$cliente->correo_cliente}}"/>
                    </div>

                    <div class="mb-3">
                       <label for="celular_cliente" class="form-label">Celular: </label>
                       <input type="text" class="form-control" name="celular_cliente" id="celular_cliente" value="{{$cliente->celular_cliente}}"/>                   
                    </div>

                    <div class="mb-3">
                        <label for="direccion_cliente" class="form-label">Dirección: </label>
                        <textarea class="form-control" name="direccion_cliente" id="direccion_cliente">{{$cliente->direccion_cliente}}</textarea>                 
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
<div class="modal fade" id="eliminarcliente{{$cliente->id_cliente}}" tabindex="-1" aria-labelledby="eliminarclienteteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Datos del Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('clientes.destroy',$cliente->id_cliente)}}" method="post" autocomplete="off">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>¿Está seguro de querer eliminar al cliente: <strong>{{$cliente->nombre_cliente}}</strong>?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>

            </form>
        </div>
    </div>
</div>