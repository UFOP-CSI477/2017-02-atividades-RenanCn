<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de alunos(a)</title>
  </head>
  <body>

    <div class="container">
      <div class="container-fluid">
        <table class="table table-striped table-bordered table-hover">
          <thead class="bg-primary">
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Cidade</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
        <!-- Dados dos alunos //-->
        <?php
          foreach($lista as $aluno){
            echo "</tr>";
              echo "<td>" . $aluno['id'] . "</td>";
              echo utf8_encode("<td>" . $aluno['aluno_nome'] . "</td>");
              echo utf8_encode("<td>" . $aluno['cidade_nome'] . "</td>");
              echo utf8_encode("<td>" . $aluno['estado_nome'] . "</td>");
            echo "</tr>";
          }
         ?>
         
       </tbody>
      </table>
    </div>
   </div>


  </body>
</html>
