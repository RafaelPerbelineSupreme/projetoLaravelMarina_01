@extends('funcionarios.funcionariosMaster')

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <h3>FUNCIONARIOS CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/funcionarios/cadastroFuncionarios">CADASTRAR NOVO FUNCIONARIO</a>
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
      <th>USUARIO</th>
      <th>RG</th>
      <th>CPF</th>
      <th>DATA DE NASCIMENTO</th>
      <th>ENDEREÇO</th>
      <th>TELEFONE 1</th>
      <th>TELEFONE 2</th>
      <th>CIDADE</th>
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($funcionarios as $funcionario)
      <tr>
        <td>{{ $funcionario->id }}</td>
        <td>{{ $funcionario->nome }}</td>
        <td>{{ $funcionario->usuario }}</td>
        <td>{{ $funcionario->rg }}</td>
        <td>{{ $funcionario->cpf }}</td>
        <td>{{ $funcionario->data_nascimento }}</td>
        <td>{{ $funcionario->endereco }}</td>
        <td>{{ $funcionario->telefone_1 }}</td>
        <td>{{ $funcionario->telefone_2 }}</td>
        @foreach ($cidades as $cidade)
            @if ($cidade->id === $funcionario->cidade_id)
                <td>{{ $cidade->nome }}</td>
            @endif
        @endforeach
        <td><a class="btn btn-xs btn-primary" href="{{"/funcionarios/editarFuncionario/{$funcionario->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/funcionarios/deletarFuncionario/{$funcionario->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $funcionarios->links() !!}
@endsection
