<!DOCTYPE html>
<html>
<head>
  <title>Cadastro Tv's</title>
  <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<style type="text/css">
	#body{
		
		border: 1px solid black;
		background-image: url('img/bg.jpg');
		background-size: cover;
		padding: 10px;
	}
	.container{
		position: relative;
		background: #ddd;
		color:#191970;

	}
	.baixo{
		margin-bottom: 20px;
	}
</style>
</head>

<body id="body">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar bg-default">
		  <a href="index-televisores" style="color:white;"><button type="button" class="btn btn-info" >Av3</button></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
			  <div class="list-group collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="list-group-item" href="index-televisores">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link" href="cria-televisor">Cadastra Televisor</a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link" href="editar-televisor">Editar</a>
			      </li>
			      <li class="nav-item">
			        <a class="list-group-item nav-link " href="lista-televisores">Lista</a>
			      </li>
			    </ul>
			  </div>
	</nav>
  <div class="container ">
    <div class="row">
      @yield('conteudo')
    </div>
  </div>
</div>
</body>
</html>