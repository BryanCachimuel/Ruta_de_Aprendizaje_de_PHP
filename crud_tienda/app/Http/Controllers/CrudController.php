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

    /*TODO: para obtener todos los datos que se ingresen por el formulario se debe poner como parámetro de la función Request request */
    public function create(Request $request){
        try {
            $sql = DB::insert("INSERT INTO producto(nombre,precio,cantidad) VALUES(?,?,?)",[
                $request->txtNombre,
                $request->txtPrecio,
                $request->txtCantidad
             ]);
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if($sql == true){
            /* si se registro correctamente se redirecciona con un mensaje que el producto se a registrado */
            return back()->with("correcto","Producto registrado correctamente");
        }else{
            return back()->with("incorrecto","Error la registrar el Producto");
        }
    }

    /*TODO: función para modificar los atributos de un registro realizado */
    public function update(Request $request){
        try {
            $sql = DB::update("UPDATE producto SET nombre=?,precio=?,cantidad=? WHERE id_producto=?",[
                $request->txtNombre,
                $request->txtPrecio,
                $request->txtCantidad,
                $request->txtCodigo
            ]);
            if($sql == 0){
                $sql = 1;
            }
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if($sql == true){
            return back()->with("correcto","Producto Modificado correctamente");
        }else{
            return back()->with("incorrecto","Error al modificar el Producto");
        }
    }

    public function delete($id){
        try {
            $sql = DB::delete("DELETE FROM producto WHERE id_producto=$id");
        } catch (\Throwable $th) {
            $sql = 0;
        }
        if($sql == true){
            return back()->with("correcto","Producto Eliminado correctamente");
        }else{
            return back()->with("incorrecto","Error al eliminar el Producto");
        }
    }
}
