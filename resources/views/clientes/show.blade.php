@extends('clientes.clientesMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h1> CLIENTE: {{$cliente->nome}}</h1>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>CPF: </strong>
        {{ $cliente->cpf }}
      </div>
    </div>
  </div>
  <a class="btn btn-primary" href="/clientes">VOLTAR</a>
@endsection
