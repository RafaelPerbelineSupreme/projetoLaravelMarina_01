@extends('tipos.tiposMaster')

@section('content')
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MARINA</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/clientes">Clientes</a></li>
            <li><a href="/funcionarios">Funcionarios</a></li>
            <li><a href="/fornecedores">Fornecedores</a></li>
            <li><a href="/embarcacoes">Embarcacoes</a></li>
            <li><a href="/modelos">Modelos</a></li>
            <li><a href="/tipos">Tipos</a></li>
            <li><a href="/marcas">Marcas</a></li>
            <li><a href="/pecas">Pecas</a></li>

          </ul>
        </li>
        <li><a href="#">Movimentações</a></li>
        <li><a href="#">Relatores</a></li>
      </ul>
    </div>
  </nav>


  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h1> : {{$tipo->nome}}</h1>
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
  <a class="btn btn-primary" href="/tipos">VOLTAR</a>
@endsection
