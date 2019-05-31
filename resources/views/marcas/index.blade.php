@extends('marcas.marcasMaster')

@section('content')


  <div class="row">
    <div class="col-lg-12">
      <h3>MARCAS CADASTRADOS</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="/marcas/cadastroMarcas">CADASTRAR NOVA MARCA</a>
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

    @foreach ($marcas as $marca)
      <tr>
        <td>{{ $marca->id }}</td>
        <td>{{ $marca->nome }}</td>
        <td><a class="btn btn-xs btn-primary" href="{{"/marcas/editarMarca/{$marca->id}/edit"}}">EDITAR</a></td>
        <td><a class="btn btn-xs btn-danger" href="{{"/marcas/deletarMarca/{$marca->id}/destroy"}}">DELETAR</a></td>
      </tr>
    @endforeach
  </table>
  {!! $marcas->links() !!}
@endsection
