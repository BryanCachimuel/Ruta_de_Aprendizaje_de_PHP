<?php
    require_once "C:/xampp/htdocs/Ejercicios_PHP/codigo_barras/database/conexion.php";
    $conectar = conexion();

    $nombre = $_POST['nombre_farmaceutico'];
    $sql = "INSERT INTO farmaceuticos(nombre_farmaceutico) VALUES($nombre)";

    $resultado = mysqli_query($conectar, $sql);

    $id = mysqli_insert_id($conectar); // se obtiene el último id insertado

    header("Location:C:/xampp/htdocs/Ejercicios_PHP/codigo_barras/index.php");
?>