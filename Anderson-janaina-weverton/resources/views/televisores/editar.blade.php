@extends('template')

@section('conteudo')
<form method="POST" action="/altera-televisor/{{$televisor->id }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
      <label>Patrimonio</label>
      <input type="text" class="form-control" name="patrimonio">
    </div>

    <div class="form-group">
      <label>Preço</label>
      <input type="text" class="form-control" name="preco">
    </div>

    <div class="form-group">
      <label>Data Nascimento</label>
      <input type="date" class="form-control" name="data">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
  </form>
@stop