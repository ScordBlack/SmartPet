<?php
  try {

    $HOST = ""; //nome do host
    $BANCO = ""; //nome do banco
    $USUARIO = ""; //nome do usuario
    $SENHA = ""; // senha

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);

  }catch(PDOException $erro){

      //echo "Erro de conexão, detalhes: " . $erro->getMessage();
      echo "conexao_erro";
  }
?>
