<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cálculo IMC - PHP</title>
    <link rel="stylesheet" href=".\bootstrap\bootstrap.css">
  </head>
  <body>

    <div class="container">
      <div class="jumbotron text-center" style="background-color: #E56D6B">
        <h1>Calculo de IMC</h1>
      </div>

      <?php

      if(($_POST['peso'] != "") && ($_POST['altura'] != "")){
        $peso   = $_POST["peso"];
        $altura = $_POST["altura"];
      }

      echo "<b>Peso:</b> $peso kg";
      echo "<br>";
      echo "<b>Altura:</b> $altura m";

      $imc = $peso/($altura*$altura);
      echo "<br><br>";
      echo "<b>IMC:</b> " . number_format((float)$imc, 2, '.', '');

      $classificacao = "";

      if ($imc < 18.5) {
        $classificacao = "Subnutrição";
      }
      else if ($imc >= 18.6 && $imc <= 24.9) {
        $classificacao = "Peso saudável";
      }
      else if ($imc >= 25 && $imc <= 29.9) {
        $classificacao = "Sobrepeso";
      }
      else if ($imc >= 30 && $imc <= 34.9) {
        $classificacao = "Obesidade grau 1";
      }
      else if ($imc >= 35 && $imc <= 39.9) {
        $classificacao = "Obesidade grau 2";
      }
      else {
        $classificacao = "Obesidade grau 3";
      }

      echo "<br>";
      echo "<b>Classificação:</b> $classificacao";

      echo "<br><br>";
      echo "<b>Peso Ideal:</b><br>";

      $p1 = 18.6 * $altura * $altura;
      $p2 = 24.9 * $altura * $altura;

      echo "<b>P1:</b> " . $p1 . "<br>";
      echo "<b>P2:</b> " . $p2;

      ?>

    </div>



  </body>
</html>
