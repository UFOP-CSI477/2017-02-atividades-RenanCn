<?php

namespace Controller;

use Model\Aluno;

class AlunosController {

  public function listar(){
    //acesso aos dados
    $aluno = new Aluno();

    //manipular os dados -> modelo
    // - recuperacao
    $lista = $aluno->getAlunos();
    // - manipulacao/tratamento
    //...

    //invocar/retornar os dados pra view
    //return view('listar.blade.php') <- laravel
    include './view/alunos/lista.php';
  }

}
