@extends('embarcacoes.embarcacoesMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>EMBARCAÇÕES CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/embarcacoes/cadastroEmbarcacoes">CADASTRAR NOVA EMBARCAÇÃO</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr style="background-color: black; color:white;">
      <th>Nº</th>
      <th>IDENTIFICAÇÃO</th>
      <th>ANO</th>
      <th>VALOR DA MENSALIDADE</th>
      <th>DESCRIÇÃO</th>
      <th>VALOR DA EMBARCAÇÃO</th>
      <th>DATA DA COMPRA</th>
      <th>FUNCIONARIO</th>
      <th>CLIENTE</th>
      <th>TIPO</th>
      <th>MODELO</th>
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($embarcacoes as $embarcacao)
      <tr>
        <td>{{ $embarcacao->id }}</td>
        <td>{{ $embarcacao->identificacao }}</td>
        <td>{{ $embarcacao->ano }}</td>
        <td>{{ $embarcacao->valor_mensalidade }}</td>
        <td>{{ $embarcacao->descricao }}</td>
        <td>{{ $embarcacao->valor_embarcacao }}</td>
        <td>{{ $embarcacao->data_da_compra }}</td>
        @if (is_null($embarcacao->funcionario_id))
            <td></td>
        @endif
        @foreach ($funcionarios as $funcionario)
            @if ($funcionario->id === $embarcacao->funcionario_id)
                <td>{{ $funcionario->nome }}</td>
            @endif
        @endforeach
        @foreach ($clientes as $cliente)
            @if ($cliente->id === $embarcacao->cliente_id)
                <td>{{ $cliente->nome }}</td>
            @endif
        @endforeach
        @foreach ($tipos as $tipo)
            @if ($tipo->id === $embarcacao->tipo_id)
                <td>{{ $tipo->nome }}</td>
            @endif
        @endforeach
        @foreach ($modelos as $modelo)
            @if ($modelo->id === $embarcacao->modelo_id)
                <td>{{ $modelo->nome }}</td>
            @endif
        @endforeach
        <td><a class="btn btn-xs btn-primary" href="{{"/embarcacoes/editarEmbarcacao/{$embarcacao->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/embarcacoes/deletarEmbarcacao/{$embarcacao->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $embarcacoes->links() !!}
@endsection
