<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class tipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::latest()->paginate(5);
        return view('tipos.index', compact('tipos'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        return view('tipos.tipoCadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
        ]);
        $tipo = new Tipo([
            'nome' => $request->get('nome'),
        ]);
        $tipo->save();
        return redirect('/tipos')->with('success','TIPO CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.show', compact('tipo'));
    }

    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.edit', compact('tipo'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'nome' => 'required',
      ]);
      Tipo::find($id)->update($request->all());
      return redirect('/tipos')->with('success','TIPO ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();
        return redirect('/tipos')->with('success','TIPO DELETADO COM SUCESSO');
    }
}
