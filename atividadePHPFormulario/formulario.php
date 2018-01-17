<!DOCTYPE html>

<html>

  <head>
      <meta charset="utf-8">
      <title>Cadastro</title>
      <link href="css\cadastrar.css" rel="stylesheet" type="text/css">
  </head>

  <body style="background-color: #EAEAEA">
    <div id="cadastro">
      <h2>Formulário de Cadastro</h2><br>

      <form action="validar.php" method="post"> <!-- !-->

        <label for="nome">Nome: </label><br>
        <input type="text" name="nome"><br><br>

        <label for="cpf">CPF: </label><br>
        <input type="text" name="cpf" ><br><br>

        <label for="rg">RG: </label><br>
        <input type="text" name="rg" ><br><br>

        <label for="genero">Gênero: </label><br>
        <input type="radio" name="genero" value="F" >Feminino
        <input type="radio" name="genero" value="M" >Masculino<br><br>

        <label for="estado">Estado: </label><br>
        <select name="estado">
          <option value="0">  </option>
          <option value="1">MG</option>
          <option value="2">SP</option>
          <option value="3">RJ</option>
          <option value="4">BA</option>
        </select><br><br>

        <label for="cidade">Cidade: </label><br>
        <select name="cidade">
          <option value="0"></option>
          <option value="1">Belo Horizonte</option>
          <option value="2">São Paulo</option>
          <option value="3">Rio de Janeiro</option>
          <option value="4">Salvador</option>
        </select><br><br>

        <label for="bairro">Bairro: </label><br>
        <input type="text" name="bairro"><br><br>

        <label for="rua">Rua: </label><br>
        <input type="text" name="rua"><br><br>

        <label for="numero">Numero: </label><br>
        <input type="text" name="numero"><br><br>

        <label for="complemento">Complemento: </label><br>
        <input type="text" name="complemento"><br><br>

        <label for="telefone1">Telefone 1: </label><br>
        <input type="text" name="numtelefone1" >
        <input type="checkbox" name="telefone1" value="whatsApp">WhatsApp
        <input type="checkbox" name="telefone1" value="telegram">Telegram<br><br>

        <label for="telefone2">Telefone2: </label><br>
        <input type="text" name="numtelefone2">
        <input type="checkbox" name="telefone2" value="whatsApp">WhatsApp
        <input type="checkbox" name="telefone2" value="telegram">Telegram<br><br>

        <label for="interesses">Interesses: </label><br>
        <input type="checkbox" name="interesses" value="engenhariaDeSoftware">Engenharia de Software<br>
        <input type="checkbox" name="interesses" value="web">Web<br>
        <input type="checkbox" name="interesses" value="jogos">Jogos<br>
        <input type="checkbox" name="interesses" value="mineracaoDeDados">Mineração de Dados<br>
        <input type="checkbox" name="interesses" value="otimizacao">Otimização<br><br>

        <label for="email">E-mail: </label><br>
        <input type="email" name="email" ><br><br>
        <label for="confirmarEmail">Confirmar e-mail: </label><br>
        <input type="email" name="confirmarEmail" ><br><br>

        <label for="senha">Senha: </label><br>
        <input type="password" name="senha" ><br><br>
        <label for="confirmarSenha">Confirmar senha: </label><br>
        <input type="password" name="confirmarSenha" ><br><br>

        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">

      </form><br><br>
    </div>
  </body>

</html>
