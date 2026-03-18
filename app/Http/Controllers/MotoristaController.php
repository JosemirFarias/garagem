<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motoristas = \App\Models\Motorista::all();

        return view('motoristas.index', compact('motoristas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motoristas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome'            => 'required|string|max:255',
            'cpf'             => 'required|string|unique:motoristas',
            'cnh'             => 'required|string|unique:motoristas',
            'data_nascimento' => 'required|date',
            'validade_cnh'    => 'required|date',
            'telefone'        => 'required|string',
        ]);

        \App\Models\Motorista::create($data);

        return redirect()->route('motoristas.index')->with('success', 'Motorista cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motorista = \App\Models\Motorista::findOrFail($id);
        return view('motoristas.show', compact('motorista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motorista = \App\Models\Motorista::findOrFail($id);
        return view('motoristas.edit', compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motorista = \App\Models\Motorista::findOrFail($id);

        $data = $request->validate([
            'nome'            => 'required|string|max:255',
            'cpf'             => 'required|string|unique:motoristas,cpf,' . $id,
            'cnh'             => 'required|string|unique:motoristas,cnh,' . $id,
            'data_nascimento' => 'required|date',
            'validade_cnh'    => 'required|date',
            'telefone'        => 'required|string',
        ]);

        $motorista->update($data);

        return redirect()->route('motoristas.index')->with('success', 'Dados atualizados!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $motorista = \App\Models\Motorista::findOrFail($id);
        $motorista->delete();

        return redirect()->route('motoristas.index')->with('success', 'Motorista removido');
    }
}
