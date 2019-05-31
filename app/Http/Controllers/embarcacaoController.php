<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Embarcacao;
use App\Modelo;
use App\Funcionario;
use App\Tipo;
use App\Cliente;


class embarcacaoController extends Controller
{
    public function index()
    {
        $embarcacoes = Embarcacao::latest()->paginate(5);
        $tipos = Tipo::all();
        $modelos = Modelo::all();
        $funcionarios = Funcionario::all();
        $clientes = Cliente::all();
        return view('embarcacoes.index', compact('embarcacoes','tipos','modelos','funcionarios','clientes'))->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        $tipos = Tipo::all();
        $modelos = Modelo::all();
        $funcionarios = Funcionario::all();
        $clientes = Cliente::all();
        return view('embarcacoes.embarcacaoCadastro', compact('tipos','modelos','funcionarios','clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'funcionario_id' => '',
          'cliente_id' => 'required',
          'tipo_id' => 'required',
          'modelo_id' => 'required',
          'identificacao' => 'required',
          'ano' => 'required',
          'valor_mensalidade' => 'required',
          'descricao' => 'required',
          'valor_embarcacao' => 'required',
          'data_da_compra' => 'required',
        ]);
        $embarcacao = new Embarcacao([
            'funcionario_id' => $request->get('funcionario_id'),
            'cliente_id' => $request->get('cliente_id'),
            'tipo_id' => $request->get('tipo_id'),
            'modelo_id' => $request->get('modelo_id'),
            'identificacao' => $request->get('identificacao'),
            'ano' => $request->get('ano'),
            'valor_mensalidade' => $request->get('valor_mensalidade'),
            'descricao' => $request->get('descricao'),
            'valor_embarcacao' => $request->get('valor_embarcacao'),
            'data_da_compra' => $request->get('data_da_compra'),
        ]);
        $embarcacao->save();
        return redirect('/embarcacoes')->with('success','EMBARCAÇÃO CLIADA COM SUCESSO');
    }

    public function show($id)
    {
        $embarcacao = Embarcacao::find($id);
        return view('embarcacoes.show', compact('embarcacao'));
    }

    public function edit($id)
    {
        $embarcacao = Embarcacao::find($id);
        $tipos = Tipo::all();
        $modelos = Modelo::all();
        $funcionarios = Funcionario::all();
        $clientes = Cliente::all();
        return view('embarcacoes.edit', compact('embarcacao','tipos','modelos','funcionarios','clientes'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'funcionario_id' => '',
        'cliente_id' => 'required',
        'tipo_id' => 'required',
        'modelo_id' => 'required',
        'identificacao' => 'required',
        'ano' => 'required',
        'valor_mensalidade' => 'required',
        'descricao' => 'required',
        'valor_embarcacao' => 'required',
        'data_da_compra' => 'required',
      ]);
      Embarcacao::find($id)->update($request->all());
      return redirect('/embarcacoes')->with('success','EMBARCAÇÃO ATUALIZADO COM SUCESSO');
    }

    public function destroy($id)
    {
        $embarcacao = Embarcacao::find($id);
        $embarcacao->delete();
        return redirect('/embarcacoes')->with('success','EMBARCAÇÃO DELETADO COM SUCESSO');
    }
}
