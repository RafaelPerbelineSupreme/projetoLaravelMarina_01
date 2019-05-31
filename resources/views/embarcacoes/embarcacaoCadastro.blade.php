<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>CADASTRO DE EMBARCAÇÕES</title>
</head>
<body>
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


<div class="container">
<form method="POST" action="/embarcacoes/cadastroEmbarcacoes/store">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">IDENTIFICAÇÃO</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="IDENTIFICAÇÃO DA EMBARCAÇÃO" name="identificacao" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">ANO</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="ANO" name="ano" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">VALOR DA MENSALIDADE</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder=MENSALIDADE" name="valor_mensalidade" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">DESCRIÇÃO</label>
      <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10" required></textarea>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">VALOR DA EMBARCAÇÃO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="VALOR DA EMBARCAÇÃO" name="valor_embarcacao" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">DATA DA COMPRA</label>
      <input type="date" class="form-control" id="inputPassword4" placeholder="DATA DA COMPRA" name="data_da_compra" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">FUNCIONARIO</label>
      <select id="inputState" class="form-control" name="funcionario_id">
        <option selected label="ESCOLHA UM FUNCIONARIO..."></option>
        @foreach ($funcionarios as $funcionario)
        <option label="{{$funcionario->nome}}">{{$funcionario->id}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">CLIENTE</label>
      <select id="inputState" class="form-control" name="cliente_id">
        <option selected>ESCOLHA UM CLIENTE...</option>
        @foreach ($clientes as $cliente)
            <option label="{{$cliente->nome}}">{{$cliente->id}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">TIPO</label>
      <select id="inputState" class="form-control" name="tipo_id">
      <option selected>ESCOLHA UM TIPO...</option>
        @foreach ($tipos as $tipo)
            <option label="{{$tipo->nome}}">{{$tipo->id}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">MODELO</label>
      <select id="inputState" class="form-control" name="modelo_id">
        <option selected>ESCOLHA UM MODELO...</option>
        @foreach ($modelos as $modelo)
            <option label="{{$modelo->nome}}">{{$modelo->id}}</option>
        @endforeach
      </select>
    </div>
  </div>
    <div class="form-group col-md-2">
      <label for="inputZip">FOTO</label>
      <input type="file" class="form-control" id="inputZip" name="imagem">
    </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
  <a class="btn btn-primary" href="/embarcacoes">VOLTAR</a>
</form>
</div>
</body>
</html>
