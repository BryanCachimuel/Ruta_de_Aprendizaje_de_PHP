<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /*TODO: función dedicada para hacer el llamado a la vista welcome.blade.php 
            en este proceso no se utilizará eloquent como para hacer las consultas hacia la base de datos, si no que se utilizará
            las propias consultas con normalidad
            Dentro del return se agrega la varaible $datos para obtener los atributos que se pida de la consulta previamente realizada
    */
    public function index(){
        $datos = DB::select("SELECT * FROM producto");
        return view("welcome")->with("datos",$datos);
    }
}
