<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Cidade;
use App\Uf;

class clienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::latest()->paginate(5);
        $cidades = Cidade::all();
        return view('clientes.index', compact('clientes','cidades'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        $cidades = Cidade::all();
        $estados = Uf::all();
        return view('clientes.clienteCadastro', compact('cidades','estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
          'rg' => 'required',
          'cpf' => 'required',
          'data_nascimento' => 'required',
          'endereco' => 'required',
          'telefone_1' => 'required',
          'telefone_2' => 'required',
          'usuario' => 'required',
          'pass' => 'required',
          'cidade_id' => 'required',
        ]);
        $cliente = new Cliente([
            'nome' => $request->get('nome'),
            'rg' => $request->get('rg'),
            'cpf' => $request->get('cpf'),
            'data_nascimento' => $request->get('data_nascimento'),
            'endereco' => $request->get('endereco'),
            'telefone_1' => $request->get('telefone_1'),
            'telefone_2' => $request->get('telefone_2'),
            'usuario' => $request->get('usuario'),
            'pass' => $request->get('pass'),
            'cidade_id' => $request->get('cidade_id'),
        ]);
        $cliente->save();
        return redirect('/clientes')->with('success','CLIENTE CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $cidades = Cidade::all();
        $estados = Uf::all();
        return view('clientes.edit', compact('cliente','cidades','estados'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'nome' => 'required',
        'rg' => 'required',
        'cpf' => 'required',
        'data_nascimento' => 'required',
        'endereco' => 'required',
        'telefone_1' => 'required',
        'telefone_2' => 'required',
        'usuario' => 'required',
        'pass' => 'required',
        'cidade_id' => 'required',
      ]);
      Cliente::find($id)->update($request->all());
      return redirect('/clientes')->with('success','CLIENTE ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes')->with('success','CLIENTE DELETADO COM SUCESSO');
    }
}
