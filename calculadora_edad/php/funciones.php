<?php

function calculaTiempo($fechaNacimiento, $fechaActual){
    $fechaInicio = date_create($fechaNacimiento);
    $fechaFin = date_create($fechaActual);
    $intervalo = date_diff($fechaInicio, $fechaFin);

    $tiempo = array();

    foreach($intervalo as $valor){
        $tiempo[] = $valor;
    }

    return $tiempo;
}

?>