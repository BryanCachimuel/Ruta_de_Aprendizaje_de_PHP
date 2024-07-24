<?php
require_once 'app/config.php';

// Primero validar que existan cotizaciones y el parámetro $_GET number
if(!isset($_GET['index'])){
    redirect('index.php?error=invalid_number');
}