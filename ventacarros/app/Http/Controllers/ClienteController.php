<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
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
        $clientes = new Cliente();
        $clientes->cedula_cliente = $request->input('cedula_cliente');
        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->edad_cliente = $request->input('edad_cliente');
        $clientes->correo_cliente = $request->input('correo_cliente');
        $clientes->celular_cliente = $request->input('celular_cliente');
        $clientes->direccion_cliente = $request->input('direccion_cliente');
        $clientes->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
