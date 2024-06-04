<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Cliente;
use App\Models\Carro;

class AdminController extends Controller
{
    public function index(){
        $marcas = Marca::all();
        $clientes = Cliente::all();
        $carros = Carro::all();
        return view('datos.index',['marcas'=>$marcas, 'clientes'=>$clientes, 'carros'=>$carros]);
    }
}
