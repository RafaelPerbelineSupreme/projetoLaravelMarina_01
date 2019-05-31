<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peca;
use App\Fornecedor;

class pecaController extends Controller
{
    public function index()
    {
        $pecas = Peca::latest()->paginate(5);
        $fornecedores = Fornecedor::all();
        return view('pecas.index', compact('pecas','fornecedores'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        $fornecedores = Fornecedor::all();
        return view('pecas.pecaCadastro', compact('fornecedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'fornecedor_id' => 'required',
          'nome' => 'required',
          'quantidade' => 'required',
          'valor' => 'required',
          'descricao' => 'required',
        ]);
        $peca = new Peca([
            'fornecedor_id' => $request->get('fornecedor_id'),
            'nome' => $request->get('nome'),
            'quantidade' => $request->get('quantidade'),
            'valor' => $request->get('valor'),
            'descricao' => $request->get('descricao'),
        ]);
        $peca->save();
        return redirect('/pecas')->with('success','PEÇA CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $peca = Peca::find($id);
        return view('pecas.show', compact('peca'));
    }

    public function edit($id)
    {
        $peca = Peca::find($id);
        $fornecedores = Fornecedor::all();
        return view('pecas.edit', compact('peca','fornecedores'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'fornecedor_id' => 'required',
        'nome' => 'required',
        'quantidade' => 'required',
        'valor' => 'required',
        'descricao' => 'required',
      ]);
      Peca::find($id)->update($request->all());
      return redirect('/pecas')->with('success','PEÇA ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $peca = peca::find($id);
        $peca->delete();
        return redirect('/pecas')->with('success','PEÇA DELETADO COM SUCESSO');
    }
}
