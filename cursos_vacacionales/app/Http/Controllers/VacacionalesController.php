<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VacacionalesController extends Controller
{
    public function index(){
        $datos = DB::select("select * from cursos");
        return view("welcome")->with("datos", $datos);
    }
}
