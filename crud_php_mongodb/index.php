<?php 
    require_once("./class/Conexion.php");
    require_once("./class/Crud.php");
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
?>

<?php include "./parts/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Crud con PHP y MongoDB</h2>
                    <a href="./views/agregar.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Nuevo Registro</a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead class="text-center">
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombres</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Edad</th>
                            <th>Ocupación</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>

                        <tbody>
                            <?php foreach($datos as $agregar) { ?>
                                <tr>
                                    <td> <?php echo $agregar->apellido_paterno; ?> </td>
                                    <td> <?php echo $agregar->apellido_materno; ?> </td>
                                    <td> <?php echo $agregar->nombres; ?> </td>
                                    <td> <?php echo $agregar->fecha_nacimiento; ?> </td>
                                    <td> <?php echo $agregar->edad; ?> </td>
                                    <td> <?php echo $agregar->ocupacion; ?> </td>
                                    <td class="text-center">
                                        <form action="" method="post">
                                            <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./views/eliminar.php" method="POST">
            
                                            <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./parts/scripts.php"; ?>