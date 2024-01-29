<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
TODO: Pasos a seguir
    1. Se realizo la confirguración de los datos de conexión hacia la base de datos en el archivo .env
    2. Se edito el contenido del la vista welcome.blade.php que se encuentra en el directorio views
    3. Se edito la ruta principal y se le agrego el controlador CrudController
    4. Para prevenir errores se debe eliminar este atributo del arreglo mysql 'charset' => 'utf8mb4'(ruta: config/database.php)
*/

Route::get('/', [CrudController::class, "index"])->name("crud.index");

/*TODO: ruta para añadir un nuevo producto a la tienda 
 Nota: name("crud.create") -> este es el nombre de la ruta
*/
Route::post('/registrar-producto', [CrudController::class, "create"])->name("crud.create");

/*TODO: ruta para modificar un producto registrado */
Route::post("/modificar-producto", [CrudController::class, "update"])->name("crud.update");

/*TODO: ruta para eliminar un producto, cuando se envia una variable en la url siempre la ruta será de tipo get*/
Route::get("/eliminar-producto-{id}", [CrudController::class, "delete"])->name("crud.delete");
