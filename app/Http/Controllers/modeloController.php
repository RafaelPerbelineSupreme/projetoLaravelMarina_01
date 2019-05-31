<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
use App\Marca;

class modeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::latest()->paginate(5);
        $marcas = Marca::all();
        return view('modelos.index', compact('modelos','marcas'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        $marcas = Marca::all();
        return view('modelos.modeloCadastro', compact('marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
          'marca_id' => 'required',
        ]);
        $modelo = new Modelo([
            'nome' => $request->get('nome'),
            'marca_id' => $request->get('marca_id'),
        ]);
        $modelo->save();
        return redirect('/modelos')->with('success','MODELO CRIADO COM SUCESSO');
    }

    public function show($id)
    {
        $modelo = Modelo::find($id);
        return view('modelos.show', compact('modelo'));
    }

    public function edit($id)
    {
        $modelo = Modelo::find($id);
        $marcas = Marca::all();
        return view('modelos.edit', compact('modelo','marcas'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'nome' => 'required',
      ]);
      Modelo::find($id)->update($request->all());
      return redirect('/modelos')->with('success','MODELO ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $modelo = Modelo::find($id);
        $modelo->delete();
        return redirect('/modelos')->with('success','MODELO DELETADO COM SUCESSO');
    }
}
