<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class fornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::latest()->paginate(5);
        return view('fornecedores.index', compact('fornecedores'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        return view('fornecedores.fornecedorCadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cnpj' => 'required',
            'nome' => 'required',
            'inscricaoEstadual' => 'required',
            'endereco' => 'required',
            'telefone_1' => 'required',
            'telefone_2' => 'required',
        ]);
        $fornecedor = new Fornecedor([
            'cnpj' => $request->get('cnpj'),
            'nome' => $request->get('nome'),
            'inscricaoEstadual' => $request->get('inscricaoEstadual'),
            'endereco' => $request->get('endereco'),
            'telefone_1' => $request->get('telefone_1'),
            'telefone_2' => $request->get('telefone_2'),
        ]);
        $fornecedor->save();
        return redirect('/fornecedores')->with('success','FORNECEDOR CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.show', compact('fornecedor'));
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);
        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'cnpj' => 'required',
        'nome' => 'required',
        'inscricaoEstadual' => 'required',
        'endereco' => 'required',
        'telefone_1' => 'required',
        'telefone_2' => 'required',
      ]);
      Fornecedor::find($id)->update($request->all());
      return redirect('/fornecedores')->with('success','FORNECEDOR ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);
        $fornecedor->delete();
        return redirect('/fornecedores')->with('success','FORNECEDOR DELETADO COM SUCESSO');
    }
}
