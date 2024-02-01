<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda Virtual</title>
    <link rel="stylesheet" href="C:/xampp/htdocs/Ejercicios_PHP/crud_tienda/resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>

    <h1 class="text-center p-3">Tienda Virtual</h1>
    
    <!-- Mensaje que viene desde el controlador informando que si se ha registrado el producto -->
    <div class="container">
       <div class="row">
            <div class="col-4 mx-auto">
                @if (session("correcto"))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>{{session("correcto")}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
        
                <!-- Mensaje que viene desde el controlador informando que no se ha registrado el producto -->
                @if (session("incorrecto"))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{session("incorrecto")}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <script>
                    var res = function(){
                        var nota = confirm("¿Estas Seguro de eliminar este producto?");
                        return nota;
                    }
                </script>
            </div>
       </div>
    </div>

   <div class="p-5 table-responsive">

    <button class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#modalAgregar">Nuevo Producto</button>

      <!-- Modal para agregar datos -->
      <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalAgregarLabel">Agregar Nuevo Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <!-- TODO: se escribe la ruta en donde se define el funcionamiento del método -->
                        <form action="{{route('crud.create')}}" method="post" autocomplete="off">
                            <!--TODO: este script es obligatorio en los formularios -->
                            @csrf
                            <!--<div class="mb-3">
                                <label for="txtCodigo" class="form-label">Código del Producto</label>
                                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo">
                            </div>-->

                            <div class="mb-3">
                                <label for="txtNombre" class="form-label">Nombre del Producto</label>
                                <input type="text" name="txtNombre" class="form-control" id="txtNombre">
                            </div>

                            <div class="mb-3">
                                <label for="txtPrecio" class="form-label">Precio del Producto</label>
                                <input type="number" step="0.01" name="txtPrecio" class="form-control" id="txtPrecio">
                            </div>

                            <div class="mb-3">
                                <label for="txtCantidad" class="form-label">Cantidad del Producto</label>
                                <input type="number" name="txtCantidad" class="form-control" id="txtCantidad">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>

        <table class="table table-primary table-striped table-bordered table-hover text-center">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">CODIGO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">CANTIDAD</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $prod)
                    <tr>
                        <th scope="row">{{$prod->id_producto}}</th>
                        <td>{{$prod->nombre}}</td>
                        <td><b>$</b>{{$prod->precio}}</td>
                        <td>{{$prod->cantidad}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="" data-bs-toggle="modal" data-bs-target="#modalEditar{{$prod->id_producto}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-danger btn-sm" href="{{route('crud.delete',$prod->id_producto)}}" onclick="return res()"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <!-- Modal de modificar datos -->
                    <div class="modal fade" id="modalEditar{{$prod->id_producto}}" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalEditarLabel">Modificar Datos del Producto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        <form action="{{route('crud.update')}}" method="POST" autocomplete="off">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="txtCodigo" class="form-label">Código del Producto</label>
                                                <input type="text" name="txtCodigo" class="form-control" id="txtCodigo" value="{{$prod->id_producto}}" readonly>
                                            </div>

                                            <div class="mb-3">
                                                <label for="txtNombre" class="form-label">Nombre del Producto</label>
                                                <input type="text" name="txtNombre" class="form-control" id="txtNombre" value="{{$prod->nombre}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="txtPrecio" class="form-label">Precio del Producto</label>
                                                <input type="number" step="0.01" name="txtPrecio" class="form-control" id="txtPrecio" value="{{$prod->precio}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="txtCantidad" class="form-label">Cantidad del Producto</label>
                                                <input type="number" name="txtCantidad" class="form-control" id="txtCantidad" value="{{$prod->cantidad}}">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Modificar</button>
                                            </div>

                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>