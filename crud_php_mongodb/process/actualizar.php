<?php session_start();
    include("../class/Conexion.php");
    include("../class/Crud.php");

    $crud = new Crud();

    $id = $_POST['id'];

    $datos = array(
        "apellido_paterno" => $_POST['apellido_paterno'],
        "apellido_materno" => $_POST['apellido_materno'],
        "nombres" => $_POST['nombres'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
        "edad" => $_POST['edad'],
        "ocupacion" => $_POST['ocupacion']
    );

    $respuesta = $crud->actualizar($id, $datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount()){
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
?>