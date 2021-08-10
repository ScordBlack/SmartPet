<?php
  try {

    $HOST = "localhost";
    $BANCO = "";
    $USUARIO = "";
    $SENHA = "";

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);

  }catch(PDOException $erro){

      //echo "Erro de conexão, detalhes: " . $erro->getMessage();
      echo "conexao_erro";
  }
?>
