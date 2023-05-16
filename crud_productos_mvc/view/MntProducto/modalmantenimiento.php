<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--<button type="button" class="modal-close" data-dismiss="modal" aria-lebel="Close">
                    <i class="font-icon-close-2"></i>
                </button>-->    
                <h4 class="modal-title" id="mdltitulo"></h4>
            </div>
            <form method="post" id="producto-form">
                <div class="modal-body">
                    <input type="hidden" name="id_producto" id="id_producto">

                    <div class="form-group">
                        <label class="form-label" for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese Nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="precio">Precio: </label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese Precio" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="cantidad">Cantidad: </label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese Cantidad" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>