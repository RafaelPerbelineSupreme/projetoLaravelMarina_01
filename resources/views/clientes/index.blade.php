@extends('clientes.clientesMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>CLIENTES CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/clientes/cadastroClientes">CADASTRAR NOVO CLIENTE</a>
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

    @foreach ($clientes as $cliente)
      <tr>
        <td>{{ $cliente->id }}</td>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->usuario }}</td>
        <td>{{ $cliente->rg }}</td>
        <td>{{ $cliente->cpf }}</td>
        <td>{{ $cliente->data_nascimento }}</td>
        <td>{{ $cliente->endereco }}</td>
        <td>{{ $cliente->telefone_1 }}</td>
        <td>{{ $cliente->telefone_2 }}</td>
        @foreach ($cidades as $cidade)
            @if ($cidade->id === $cliente->cidade_id)
                <td>{{ $cidade->nome }}</td>
            @endif
        @endforeach
        <td><a class="btn btn-xs btn-primary" href="{{"/clientes/editarCliente/{$cliente->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/clientes/deletarCliente/{$cliente->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $clientes->links() !!}
@endsection
