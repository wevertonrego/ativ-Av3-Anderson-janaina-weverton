@extends('template')


@section('conteudo')
<div class="baixo">
  <div class="panel">
    <div class="panel-heading">
      aqui vai mostra todos as Tv's da lista
    </div>
    <div class="panel-body">
      <form>
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisa"/>
        </div>
        <button type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Patrimonio</th>
        <th>Preço</th>
        <th>data</th>
        <th>Funções</th>
      </tr>
    </thead>

    <tbody>
      @foreach($televisores as $televisor)
        <tr>
            <td> {{ $televisor->id }} </td>
            <td> {{ $televisor->name }} </td>
            <td> {{ $televisor->patrimonio }} </td>
            <td> {{ $televisor->preco }} </td>
            <td> {{ $televisor->data }} </td>
            
            <td>
              <a class="btn btn-secondary" href="/editar-televisor/{{ $televisor->id }}">
                <i class="fa fa-edit"></i> Editar
              </a>

              <form style="display: inline;" method="POST" action="deletar-televisor/{{ $televisor->id }}">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
              <button type="submit" class="btn btn-danger" href="/editar-televisor/{{ $televisor->id }}">
                <i class="fa fa-trash"></i> Deletar
              </button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <a href="/cria-televisor" class="btn btn-success">
    <i class="fa fa-plus-circle"></i>
    Adicionar Tv
  </a>
  </div>
@stop
    