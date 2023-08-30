<?php

use App\Http\Controllers\VacacionalesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| "index"-> nombre del método en el archivo VacacionalController
| name("crud.index") -> nombre que se le da a la ruta
*/

Route::get("/", [VacacionalesController::class, "index"])->name("crud.index");
