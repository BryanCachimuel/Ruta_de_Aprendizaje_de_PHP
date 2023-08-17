<?php 
    include("C://xampp/htdocs/Ejercicios_PHP/crud_php_mongodb/class/Conexion.php");
    include("C://xampp/htdocs/Ejercicios_PHP/crud_php_mongodb/class/Crud.php");
    
    $crud = new Crud();
    $id = $_POST['id']; 
    $datos = $crud->obtenerDocumento($id);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3 fondoEliminacion" style="background-color: #fa795f;">
                    <div class="card-header">
                        <h2>Eliminar Registro</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Nombres</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Edad</th>
                                <th>Ocupación</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $datos->apellido_paterno; ?></td>
                                    <td><?php echo $datos->apellido_materno; ?></td>
                                    <td><?php echo $datos->nombres; ?></td>
                                    <td><?php echo $datos->fecha_nacimiento; ?></td>
                                    <td><?php echo $datos->edad; ?></td>
                                    <td><?php echo $datos->ocupacion; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p>¿Estás Seguro de Eliminar este Registro?</p>
                            <p>Una vez Eliminado no podrá ser recuperado</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <form action="../process/eliminar.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $datos->_id; ?>">
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Eliminar</button>
                            <a href="../index.php" class="btn btn-warning"><i class="fa-solid fa-xmark"></i> Cancelar</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../public/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>