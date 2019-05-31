@extends('fornecedores.fornecedoresMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>FORNECEDORES CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/fornecedores/cadastroFornecedores">CADASTRAR NOVO FORNECEDOR</a>
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
      <th>CNPJ</th>
      <th>NOME</th>
      <th>INSCRIÇÃO ESTADUAL</th>
      <th>ENDEREÇO</th>
      <th>TELEFONE 1</th>
      <th>TELEFONE 2</th>
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($fornecedores as $fornecedor)
      <tr>
        <td>{{ $fornecedor->id }}</td>
        <td>{{ $fornecedor->cnpj }}</td>
        <td>{{ $fornecedor->nome }}</td>
        <td>{{ $fornecedor->inscricaoEstadual }}</td>
        <td>{{ $fornecedor->endereco }}</td>
        <td>{{ $fornecedor->telefone_1 }}</td>
        <td>{{ $fornecedor->telefone_2 }}</td>
        <td><a class="btn btn-xs btn-primary" href="{{"/fornecedores/editarFornecedor/{$fornecedor->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/fornecedores/deletarFornecedor/{$fornecedor->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $fornecedores->links() !!}
@endsection
