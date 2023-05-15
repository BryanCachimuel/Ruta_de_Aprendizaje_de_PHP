<?php

    require_once("../config/Conexion.php");
    require_once("../models/Productos.php");

    $productos = new Productos();

    switch($_GET["opcion"]){
        case "listar":
        $datos = $productos->get_productos();
        $data = Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["precio"];
            $sub_array[] = $row['cantidad'];
            $sub_array[] = $row['precio_total'];
            $sub_array[] = '<button type="button" onClick="editar('.$row["id_producto"].');"  id="'.$row["id_producto"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onClick="eliminar('.$row["id_producto"].');"  id="'.$row["id_producto"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';

        }

        $resultados = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data
        );
        echo json_encode($resultados);
        break;

        case "guardaryeditar":
        $datos = $pro->get_producto_por_id($_POST["id_producto"]);
        if(empty($_POST["id_producto"])){
            if(is_array($datos) == true and count($datos) == 0){
                $productos->agregar_producto($_POST["nombre"], $_POST["precio"], $_POST["cantidad"]);
            }
        }else{
            $productos->actualizar_producto($_POST["nombre"], $_POST["precio"], $_POST["cantidad"],$_POST["id_producto"]);
        }
        break;
        
        case "mostrar":
        $datos = $pro->get_producto_por_id($_POST["id_producto"]);
        if(is_array($datos) == true and count($datos) > 0){
            foreach($datos as $row){
                $output["id_producto"] = $row["id_producto"];
                $output["nombre"] = $row["nombre"];
                $output["precio"] = $row["precio"];
                $output["cantidad"] = $row["cantidad"];
            }
        }
        break;
        
    }

?>