<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos con PHP y API FETCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>
<body>

    <div class="container  mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Productos</div>
                    <div class="card-body">
                        <form action="" method="POST" id="formulario" autocomplete="off">
                            <div class="form-group">
                                <label for="codigo">Código:</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Código del producto">
                            </div>
                            <div class="form-group">
                                <label for="producto">Producto:</label>
                                <input type="text" class="form-control" name="producto" id="producto" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="number" step="any" class="form-control" name="precio" id="precio" placeholder="Precio del producto">
                            </div>
                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad del producto">
                            </div>
                            <div class="form-group d-grid gap-2 mt-3">
                               <input type="button" class="btn btn-outline-primary" value="Registrar" id="registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
            <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="buscra">Buscar:</label>
                                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-responsive">
                    <thead class="bg-dark text-white text-center">
                        <tr>
                            <th>Id</th>
                            <th>Código</th>
                            <th>Nombre Producto</th>
                            <th>Precio Unitario</th>
                            <th>Cantidad</th>
                            <th>Valor Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="resultado">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- haciendo el llamado al archivo js -->
    <script src="./assets/script_fecth.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>
</html>