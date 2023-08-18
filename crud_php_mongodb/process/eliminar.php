<?php session_start();
    include("../class/Conexion.php");
    include("../class/Crud.php");

    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminarDato($id);

    if($respuesta->getDeletedCount() > 0){
        $_SESSION['mensaje_crud'] = 'delete';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
    
?>