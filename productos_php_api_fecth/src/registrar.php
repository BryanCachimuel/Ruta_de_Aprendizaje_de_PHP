<?php
    /* Hacemos una validación de si existe $_POST
        Optenemos los name de cada input del formulario
     */
    if(isset($_POST)){
        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $valor_total = $precio * $cantidad;
        require("../database/conexion.php");
        $query = $pdo->prepare("INSERT INTO productos(codigo,producto,precio,cantidad,valor_total)VALUES(:codigo,:producto,:precio,:cantidad,:valor_total)");
        $query->bindParam(":codigo", $codigo);
        $query->bindParam(":producto", $producto);
        $query->bindParam(":precio", $precio);
        $query->bindParam(":cantidad", $cantidad);
        $query->bindParam(":valor_total", $valor_total);
        $query->execute();
        $pdo = null;
        echo "ok";
    }


?>