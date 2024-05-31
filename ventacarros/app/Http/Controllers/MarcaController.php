<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * marcas->nombre_marca : nombre del atributo desde la bdd 
     * $request->input('nombre_marca') : nombre del atributo traido desde el formulario de creación 
     */
    public function store(Request $request)
    {
        $marcas = new Marca;
        $marcas->nombre_marca = $request->input('nombre_marca');
        $marcas->descripcion_marca = $request->input('descripcion_marca');
        $marcas->save();
        
        //return redirect()->back();
        return redirect()->route('marcas.index')->with('mensaje','Marca Registrada Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * en la clase Marca se establece el método find para buscar por id_marca
     */
    public function update(Request $request, $id_marca)
    {   
        $marcas = Marca::find($id_marca);
        $marcas->nombre_marca = $request->input('nombre_marca');
        $marcas->descripcion_marca = $request->input('descripcion_marca');
        $marcas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_marca)
    {
        $marcas = Marca::find($id_marca);
        $marcas->delete();
        return redirect()->back();
    }
}
