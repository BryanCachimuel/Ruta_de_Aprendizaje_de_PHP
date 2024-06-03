<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Cliente;

class AdminController extends Controller
{
    public function index(){
        $marcas = Marca::all();
        $clientes = Cliente::all();
        return view('datos.index',['marcas'=>$marcas, 'clientes'=>$clientes]);
    }
}
