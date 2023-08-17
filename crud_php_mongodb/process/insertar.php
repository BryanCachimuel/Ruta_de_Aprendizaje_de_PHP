<?php
    include("../class/Conexion.php");
    include("../class/Crud.php");

    $crud = new Crud();

    $datos = array(
        "apellido_paterno" => $_POST['apellido_paterno'],
        "apellido_materno" => $_POST['apellido_materno'],
        "nombres" => $_POST['nombres'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
        "edad" => $_POST['edad'],
        "ocupacion" => $_POST['ocupacion']
    );

    $respuesta = $crud->insertarDatos($datos);

    if($respuesta->getInsertedId() > 0){
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
?>