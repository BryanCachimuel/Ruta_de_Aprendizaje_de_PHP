<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
TODO: Pasos a seguir
    1. Se realizo la confirguración de los datos de conexión hacia la base de datos en el archivo .env
    2. Se edito el contenido del la vista welcome.blade.php que se encuentra en el directorio views
    3. Se edito la ruta principal y se le agrego el controlador CrudController
    4. 
*/

Route::get('/', [CrudController::class, "index"])->name("crud.index");
