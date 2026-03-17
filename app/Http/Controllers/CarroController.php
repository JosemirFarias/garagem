<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = \App\Models\Carro::with('motorista')->get();

        return view('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motoristas = \App\Models\Motorista::all();

        return view('carros.create', compact('motoristas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required|numeric',
            'placa' => 'required|unique:carros',
            'motorista_id' => 'nullable|existes:motoristas,id'
        ]);

        \App\Models\Carro::create($data);

        return redirect()->route('carros.index')->with('success', 'Carro cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carro = \App\Models\Carro::findOrFail($id);
        $carro->delete();

        return redirect()->route('carros.index')->with('success', 'Carro removido');
    }
}
