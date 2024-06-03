<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class AdminController extends Controller
{
    public function index(){
        $marcas = Marca::all();
        return view('datos.index',['marcas'=>$marcas]);
    }
}
