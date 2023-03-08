<?php

    $servidor = "mysql:dbname=productos_fetch;host=localhost";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO($servidor, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        echo "Conexión hacia la base de datos Exitosa";
    } catch (PDOException $e) {
        echo "No se a podido conectar hacia la base de datos: " . $e->getMessage();
    }

?>