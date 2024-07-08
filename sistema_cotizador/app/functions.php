<?php

function get_view($view_name){
    $view = VIEWS.$view_name;
    // en caso de no existir la vista
    if(!is_file($view_name)){
        die('La vista no existe');
    }
    // Existe la vista
    require_once $view;
}