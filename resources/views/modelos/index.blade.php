@extends('modelos.modelosMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>MODELOS CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/modelos/cadastroModelos">CADASTRAR NOVO MODELO</a>
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
      <th>MARCA</th>
      <th colspan="3" class="text-center">AÇÕES</th>
    </tr>

    @foreach ($modelos as $modelo)
      <tr>
        <td>{{ $modelo->id }}</td>
        <td>{{ $modelo->nome }}</td>
        @foreach ($marcas as $marca)
            @if ($marca->id === $modelo->marca_id)
                <td>{{ $marca->nome }}</td>
            @endif
        @endforeach
        <td><a class="btn btn-xs btn-primary" href="{{"/modelos/editarModelo/{$modelo->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/modelos/deletarModelo/{$modelo->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $modelos->links() !!}
@endsection
