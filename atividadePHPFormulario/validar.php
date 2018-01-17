<?php

  $erro = false;

  if (!isset($_POST) || empty($_POST)) {
	$erro = '(s/post)';
  }

  foreach ($_POST as $chave => $valor) {
  	// Remove tags HTML
  	$$chave = trim(strip_tags($valor));

  	if (empty($valor)){
  		$erro = '<h2><b style="color:red">Erro:</b></h2>Há campos vazios.';
  	}

    }

    /***/

    if ((!isset($numero) || !is_numeric($numero)) && !$erro) {
	     $erro = '<h2><b style="color:red">Erro:</b></h2>Preencha corretamente o número da casa.';
    }

    if ((!isset($numtelefone1) || !is_numeric($numtelefone1)) && !$erro){
       $erro = '<h2><b style="color:red">Erro:</b></h2>Preencha com números o campo telefone.';
    }

    if ((!isset($numtelefone2) || !is_numeric($numtelefone2)) && !$erro) {
       $erro = '<h2><b style="color:red">Erro:</b></h2>Preencha com números o campo telefone.';
    }

    if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        || (!isset($confirmarEmail) || !filter_var($confirmarEmail, FILTER_VALIDATE_EMAIL)) && !$erro) {
	     $erro = '<h2><b style="color:red">Erro:</b></h2>Envie um email válido.';
    }

    if (($email != $confirmarEmail) && !$erro) {
       $erro = '<h2><b style="color:red">Erro:</b></h2>Você inseriu e-mails diferentes.';
    }

    if (($senha != $confirmarSenha) && !$erro) {
      $erro = '<h2><b style="color:red">Erro:</b></h2>Você inseriu senhas diferentes.';
    }

    /***/

    if ( $erro ) {
    	echo $erro;
    } else {
    	echo "<h2>Dados enviados:</h2>";

    	foreach ( $_POST as $chave => $valor ) {
    		echo '<b>' . $chave . '</b>: ' . $valor . '<br>';
    	}
    }

  echo('<br><br><a href="formulario.php">Voltar</a>');

?>
