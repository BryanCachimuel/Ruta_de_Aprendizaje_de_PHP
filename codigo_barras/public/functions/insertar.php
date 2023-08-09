<?php
    require_once("C://xampp/htdocs/Ejercicios_PHP/codigo_barras/database/conexion.php");
    $conectar = conexion();

    $nombre = $_POST['nombre_farmaceutico'];
    $sql = "INSERT INTO medicamentos(nombre_farmaceutico) VALUES('$nombre')";

    $resultado = mysqli_query($conectar, $sql);

    $id = mysqli_insert_id($conectar); // se obtiene el último id insertado
    $codigo = $id.date('is');

    $consulta = "UPDATE medicamentos SET codigo_farmaceutico='$codigo' WHERE id_farmaceutico='$id'";
    mysqli_query($conectar,$consulta);

    $url = "http://localhost/Ejercicios_PHP/codigo_barras/index.php";

    header("Location: $url");
    // C://xampp/htdocs/Ejercicios_PHP/codigo_barras/index.php
?>