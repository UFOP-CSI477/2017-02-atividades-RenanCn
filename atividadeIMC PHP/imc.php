<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IMC - PHP</title>
    <link rel="stylesheet" href=".\bootstrap\bootstrap.css">
    <script src=".\js\jquery-3.2.1.js"></script>
    <script src=".\js\validacao.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron text-center" style="background-color: #E56D6B">
        <h1>Calculo de IMC</h1>
      </div>

    <form action="calculo.php" name="dados" method="post">

      <div id="grupoPeso" class="form-group">
        <label for="peso">Peso</label>
        <input type="text" name="peso" class="form-control" required>

        <div class="alert alert-danger" style="display: none" id="alertaPeso">
          Informe o peso corretamente.
        </div>
      </div>

      <div id="grupoAltura" class="form-group">
        <label for="altura">Altura</label>
        <input type="text" name="altura" class="form-control" required>

        <div class="alert alert-danger" style="display: none" id="alertaAltura">
          Informe a altura corretamente.
        </div>
        <br>

      </div>

      <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
      <button type="reset" class="btn btn-danger">Limpar</button>


    </form>

    </div>
  </body>
</html>
