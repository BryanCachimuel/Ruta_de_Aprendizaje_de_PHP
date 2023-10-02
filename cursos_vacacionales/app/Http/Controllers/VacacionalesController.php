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

    public function create(Request $request){
        $sql =DB::insert("insert into cursos(nombre_curso,nombre_estudiante,nombre_instructor,actividades,instrumentos,valor_curso) values(?,?,?,?,?,?)",[
            $request->nombre_curso,
            $request->nombre_estudiante,
            $request->nombre_instructor,
            $request->actividades,
            $request->instrumentos,
            $request->valor_curso
        ]);
        if($sql == true){
            return back()->with("Correcto","Estudiante Registrado Correctamente en el Curso");
        }else{
            return back()->with("Incorrecto","El Estudiante no ha sido Registrado en el Curso");
        }
    }
}
