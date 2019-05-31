@extends('tipos.tiposMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>TIPOS CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/tipos/cadastroTipos">CADASTRAR NOVO TIPO</a>
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
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($tipos as $tipo)
      <tr>
        <td>{{ $tipo->id }}</td>
        <td>{{ $tipo->nome }}</td>
        <td><a class="btn btn-xs btn-primary" href="{{"/tipos/editarTipo/{$tipo->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/tipos/deletarTipo/{$tipo->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $tipos->links() !!}
@endsection
