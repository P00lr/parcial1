<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->validated());

        return redirect()->route('clientes.index')
                         ->with('success','Cliente creado correctamente.');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(UpdateClienteRequest $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->validated());

        return redirect()->route('clientes.index')
                         ->with('success','Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect()->route('clientes.index')
                         ->with('success','Cliente eliminado correctamente.');
    }
    
}
