<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Televisor;
use App\Http\Requests\TvRequest;


class TvController extends Controller
{
   
   public function listaTelevisor(Request $requisicao)
  {
    $televisores = Televisor::select('*');

    if($requisicao->has('pesquisa')) {
      $televisores->where('name', 'like', '%' . $requisicao->get('pesquisa') . '%');
    }

    $televisores->orderBy('name', 'asc');

    $listaDeTelevisores = $televisores->get();

    return view('televisores.lista', [
      'televisores' => $listaDeTelevisores
    ]);
  }

  public function salvarTelevisor(TVRequest $requisicao)
  {
    Televisor::create([
      'name' => $requisicao->get('name'),
      'patrimonio' => $requisicao->get('patrimonio'),
      'preco' => $requisicao->get('preco'),
      'data' => $requisicao->get('data')
    ]);

      

    return redirect('lista-televisores');
  }

   public function homeTelevisor()
  {
    return view('televisores.index');
  }


  public function formularioTelevisor()
  {
  	return view('televisores.criar');
  }


  public function editarTelevisor($id)
  {
    $televisor = Televisor::find($id);

    return view('televisores.editar', [
      'televisor' => $televisor
    ]);
  }

  public function alteraTelevisor($id, Request $requisicao)
  {
    $televisor = Televisor::find($id);

    $televisor->update([
      'name' => $requisicao->get('name'),
      'patrimonio' => $requisicao->get('patrimonio'),
      'preco' => $requisicao->get('preco'),
      'data' => $requisicao->get('data')
    ]);

    return redirect('lista-televisores');
  }

	public function deletarTelevisor($id)
	  {
      Funcionario::destroy($id);
	return redirect('lista-televisores');
	  }
	
}
