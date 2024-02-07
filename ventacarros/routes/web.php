<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

/*
    Web Routes
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('marcas', MarcaController::class);
Route::resource('carros', CarroController::class);
Route::resource('clientes', ClienteController::class);
