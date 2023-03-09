<?php
    /* Hacemos una validación de si existe $_POST
        Optenemos los name de cada input del formulario
     */
    try {
        if(isset($_POST)){
            $codigo = $_POST['codigo'];
            $producto = $_POST['producto'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $valor_total = ($precio * $cantidad);
            require("../database/conexion.php");
            if (empty($_POST['idp'])){
            $query = $pdo->prepare("INSERT INTO productos(codigo,producto,precio,cantidad,valor_total)VALUES(:cod,:prod,:prec,:cant,:vtotal)");
            $query->bindParam(":cod", $codigo);
            $query->bindParam(":prod", $producto);
            $query->bindParam(":prec", $precio);
            $query->bindParam(":cant", $cantidad);
            $query->bindParam(":vtotal", $valor_total);
            $query->execute();
            $pdo = null;
            echo "ok";
            }else{
                $id = $_POST['idp'];
                $query = $pdo->prepare("UPDATE productos SET codigo = :cod, producto = :pro, precio =:pre, cantidad = :cant, valor_total = :vtotal  WHERE id = :id");
                $query->bindParam(":cod", $codigo);
                $query->bindParam(":pro", $producto);
                $query->bindParam(":pre", $precio);
                $query->bindParam(":cant", $cantidad);
                $query->bindParam(":vtotal", $valor_total);
                $query->bindParam("id", $id);
                $query->execute();
                $pdo = null;
                echo "modificado";
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }


?>