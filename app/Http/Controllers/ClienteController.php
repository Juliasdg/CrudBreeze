<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;


class ClienteController extends Controller
{
    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteFormRequest $request)
    {
        $data = $request->validated();

        $cliente = Cliente::create($data);
        
        return redirect('/listar-cliente')->with('message', 'Cliente adicionado com sucesso!');
    }

    public function list()
    {
        $clientes = Cliente::all();
        return view('cliente.list', ['clientes' => $clientes]);
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/listar-cliente');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit', ['cliente' => $cliente]);
    }

    public function update(ClienteFormRequest $request)
    {
        $data = $request->validated();
        $cliente = Cliente::find($request->id);
        $cliente = $cliente->update($data);
        
        return redirect('/listar-cliente')->with('message', 'Cliente editado com sucesso!');
    }
}
