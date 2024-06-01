<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Cliente;
use App\Models\Marca;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = Carro::all();
        /* para obtener todas las marcas y poder listarlas en el select de creación de carros */
        $marcas = Marca::all();
        $clientes = Cliente::all();
        return view('carro.index', compact('carros','marcas','clientes'));
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
     */
    public function store(Request $request)
    {
        $carros = new Carro;
        $carros->id_marca = $request->input('id_marca');
        $carros->id_cliente = $request->input('id_cliente');
        $carros->descripcion_carro = $request->input('descripcion_carro');
        $carros->precio_carro = $request->input('precio_carro');
        $carros->cantidad_carro = $request->input('cantidad_carro');
        $carros->valor_total_carro = $carros->precio_carro * $carros->cantidad_carro;
        $carros->save();

        //return redirect()->back();
        return redirect()->route('carros.index')->with('mensaje','Carro Registrado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_carro)
    {
        $carros = Carro::find($id_carro);
        $carros->id_marca = $request->input('id_marca');
        $carros->id_cliente = $request->input('id_cliente');
        $carros->descripcion_carro = $request->input('descripcion_carro');
        $carros->precio_carro = $request->input('precio_carro');
        $carros->cantidad_carro = $request->input('cantidad_carro');
        $carros->valor_total_carro = $carros->precio_carro * $carros->cantidad_carro;
        $carros->update();
        return redirect()->route('carros.index')->with('mensaje','Carro Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_carro)
    {
        $carros = Carro::find($id_carro);
        $carros->delete();
        return redirect()->route('carros.index')->with('mensaje','Carro Eliminado Correctamente');
    }
}
