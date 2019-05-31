@extends('pecas.pecasMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>PEÇAS CADASTRADAS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/pecas/cadastroPecas">CADASTRAR NOVA PEÇAS</a>
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
      <th>NOME</th>
      <th>QUANTIDADE</th>
      <th>VALOR</th>
      <th>DESCRIÇÃO</th>
      <th>FORNECEDOR</th>
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($pecas as $peca)
      <tr>
        <td>{{ $peca->id }}</td>
        <td>{{ $peca->nome }}</td>
        <td>{{ $peca->quantidade }}</td>
        <td>{{ $peca->valor }}</td>
        <td>{{ $peca->descricao }}</td>
        @foreach ($fornecedores as $fornecedor)
            @if ($fornecedor->id === $peca->fornecedor_id)
                <td>{{ $fornecedor->nome }}</td>
            @endif
        @endforeach
        <td><a class="btn btn-xs btn-primary" href="{{"/pecas/editarPeca/{$peca->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/pecas/deletarPeca/{$peca->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $pecas->links() !!}
@endsection
