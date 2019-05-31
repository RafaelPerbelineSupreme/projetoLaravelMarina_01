<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Cidade;
use App\Uf;

class funcionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::latest()->paginate(5);
        $cidades = Cidade::all();
        return view('funcionarios.index', compact('funcionarios','cidades'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        $cidades = Cidade::all();
        $estados = Uf::all();
        return view('funcionarios.funcionarioCadastro', compact('cidades','estados'));
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
        $funcionario = new Funcionario([
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
        $funcionario->save();
        return redirect('/funcionarios')->with('success','FUNCIONARIO CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.show', compact('funcionario'));
    }

    public function edit($id)
    {
        $funcionario = Funcionario::find($id);
        $cidades = Cidade::all();
        $estados = Uf::all();
        return view('funcionarios.edit', compact('funcionario','cidades','estados'));
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
      Funcionario::find($id)->update($request->all());
      return redirect('/funcionarios')->with('success','FUNCIONARIO ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect('/funcionarios')->with('success','FUNCIONARIO DELETADO COM SUCESSO');
    }
}
