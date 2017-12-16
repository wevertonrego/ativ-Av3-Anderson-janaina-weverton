@extends('template')


@section('conteudo')
<div class="contain baixo">

  <form method="POST" action="/salva-televisor">
    {!! csrf_field() !!}
    <div class="form-group">

          @if($errors->any())

      <ul class="list-group">
        
        @foreach($errors->all() as $error)

        <li class="list-group-item list-group-item-warning">{{ $error }}</li>


        @endforeach 

      </ul>


      @endif



      <label>Nome</label>
      <input type="text" class="form-control" name="name" >
    </div>

    <div class="form-group">
      <label>Patrimonio</label>
      <input type="text" class="form-control" name="patrimonio" ">
    </div>

    <div class="form-group">
      <label>Preço</label>
      <input type="text" class="form-control" name="preco" >
    </div>

    <div class="form-group">
      <label>Data Nascimento</label>
      <input type="date" class="form-control" name="data" >
    </div>

    <a class="btn btn-secondary" href="/index-televisores" >
      <i class="fa fa-arrow-left"></i> Voltar
    </a>
    
    <button type="submit" class="btn btn-success">
      <i class="fa fa-check-circle"></i>
      Salvar
    </button>

  </form>
  
  </div>
@stop