<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>ATUALIZAÇÃO DE FORNECEDOR</title>
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
<form method="POST" action="{{"/fornecedores/editarFornecedor/{$fornecedor->id}/update"}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">CNPJ</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="CNPJ DO FORNECEDOR" name="cnpj" required value="{{$fornecedor->cnpj}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">NOME</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="NOME DO FORNECEDOR" name="nome" required value="{{$fornecedor->nome}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">INSCRIÇÃO ESTADUAL</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="INSCRIÇÃO ESTADUAL" name="inscricaoEstadual" required value="{{$fornecedor->inscricaoEstadual}}">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">ENDEREÇO</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="endereco" required value="{{$fornecedor->endereco}}">
  </div>
  <div class="form-group">
    <label for="inputAddress2">TELEFONE</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="TELEFONE 1" name="telefone_1" required value="{{$fornecedor->telefone_1}}">
  </div>
  <div class="form-group">
    <label for="inputAddress2">TELEFONE 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="TELEFONE 2" name="telefone_2" required value="{{$fornecedor->telefone_2}}">
  </div>
    <div class="form-group col-md-2">
      <label for="inputZip">FOTO</label>
      <input type="file" class="form-control" id="inputZip" name="imagem">
    </div>
  <button type="submit" class="btn btn-primary">ATUALIZAR</button>
  <a class="btn btn-primary" href="/fornecedores">VOLTAR</a>
</form>
</div>
</body>
</html>
