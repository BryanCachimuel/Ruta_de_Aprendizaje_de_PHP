<?php 

include "funciones.php";

$fechaNacimiento = $_POST['fecha'];
$fechaFin = date('Y-m-d');
echo calculaTiempo($fechaNacimiento, $fechaFin)[0];

?>