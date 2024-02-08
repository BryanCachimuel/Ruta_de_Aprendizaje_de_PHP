<!-- Modal para crear -->
<div class="modal fade" id="crearcliente" tabindex="-1" aria-labelledby="crearclienteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Nuevo Cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('clientes.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nombre_marca" class="form-label">Cédula: </label>
                        <input type="text" class="form-control" name="cedula_cliente" id="nombre_propietario"/>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre_cliente" class="form-label">Cliente: </label>
                            <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente"/>
                        </div>
                        <div class="col">
                            <label for="edad_cliente" class="form-label">Edad: </label>
                            <input type="number" class="form-control" name="edad_cliente" id="edad_cliente"/>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo_cliente" class="form-label">Correo: </label>
                        <input type="email" class="form-control" name="correo_cliente" id="correo_cliente"/>
                    </div>

                    <div class="mb-3">
                       <label for="celular_cliente" class="form-label">Celular: </label>
                       <input type="text" class="form-control" name="celular_cliente" id="celular_cliente"/>                   
                    </div>

                    <div class="mb-3">
                        <label for="direccion_cliente" class="form-label">Dirección: </label>
                        <textarea class="form-control" name="direccion_cliente" id="direccion_cliente"></textarea>                 
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>