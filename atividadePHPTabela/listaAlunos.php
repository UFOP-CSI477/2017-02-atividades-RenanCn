<?php

  $db = new PDO('mysql:host=localhost;dbname=academico','sistemaweb','123456');

  $alunos = $db->query("SELECT a.nome AS aluno_nome, c.nome AS cidade_nome, e.nome AS estado_nome
                        FROM alunos a, cidades c, estados e WHERE a.cidade_id = c.id AND c.estado_id = e.id
                        ORDER BY a.nome");

  //var_dump($alunos);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href=".\css\bootstrap\bootstrap.css">
  </head>
  <body>

    <!-- tabela-->
    <div class="container">
      <div class="container-fluid">
        <table class="table table-striped table-bordered table-hover">
          <thead class="bg-primary">
            <tr>
              <th>Nome</th>
              <th>Cidade</th>
              <th>Estado</th>
            </tr>
          </thead>
          </tbody>
        <?php
          //view

          while ($linha = $alunos->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo utf8_encode ("<td>" . $linha["aluno_nome"] . " </td> " . "<td>" . $linha["cidade_nome"] . "</td>"
                            . "<td>" . $linha["estado_nome"] . "</td>");
            echo "</tr>";
          }
         ?>
          </tbody>
       </table>
      </div>
    </div>

  </body>
</html>
