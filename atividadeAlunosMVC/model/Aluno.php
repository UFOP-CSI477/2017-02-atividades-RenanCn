<?php

namespace Model;

class Aluno {

  public function getAlunos(){
    $sql = "SELECT a.id, a.nome AS aluno_nome, c.nome AS cidade_nome, e.nome AS estado_nome
                        FROM alunos a, cidades c, estados e WHERE a.cidade_id = c.id AND c.estado_id = e.id
                        ORDER BY a.nome";

    $alunos = Database::getInstance()->getDB()->query($sql);

    return $alunos;
  }

}
