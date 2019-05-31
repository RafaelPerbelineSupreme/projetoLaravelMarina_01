<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class marcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::latest()->paginate(5);
        return view('marcas.index', compact('marcas'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        return view('marcas.marcaCadastro');
    }

    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
        ]);
        $marca = new Marca([
            'nome' => $request->get('nome'),
        ]);
        $marca->save();
        return redirect('/marcas')->with('success','MARCA CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        return view('marcas.show', compact('marca'));
    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'nome' => 'required',
      ]);
      Marca::find($id)->update($request->all());
      return redirect('/marcas')->with('success','MARCA ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        return redirect('/marcas')->with('success','MARCA DELETADO COM SUCESSO');
    }
}
