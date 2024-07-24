<?php
require_once 'app/config.php';

// Primero validar que existan cotizaciones y el parámetro $_GET number
if(!isset($_GET['index'])){
    redirect('index.php?error=invalid_number');
}

// Si no hay cotizaciones
$quotes = get_all_quotes();
if(empty($quotes)){
    redirect('index.php?error=no_quotes');
}

// Buscar el match del folio que buscamos
$number = trim($_GET['number']);
foreach($quotes as $q){
   if(sprintf(UPLOADS.'coty_%s.pdf',$number) ==$q){
     // Descarga
     header('Content-Type: application/pdf');
     header(sprintf('Content-Disposition: attachment;filename=%s', pathinfo($q, PATHINFO_BASENAME)));
     readfile($q);
   }
}

// No existe la cotización
redirect('index.php?error=not_found');