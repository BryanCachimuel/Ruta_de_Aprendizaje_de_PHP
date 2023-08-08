<?php
    function conexion(){
        $conexion = mysqli_connect('localhost',
                                   'root',
                                   '',
                                   'crud_codigo_barras');
        return $conexion;
    }
?>