<?php include "./header.php"; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>Crud con PHP y MongoDB</h2>
                    <a href="" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i> Nuevo Registro</a>
                    <hr>
                    <table class="table table-sm table-hover table-bordered">
                        <thead class="text-center">
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Nombres</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Estudios</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <form action="" method="post">
                                        <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="">
                                        <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php";  ?>