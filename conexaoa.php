<?php
  try {

    $HOST = "localhost";
    $BANCO = "id9609465_login";
    $USUARIO = "id9609465_root";
    $SENHA = "12345";

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" . $BANCO . ";charset=utf8", $USUARIO, $SENHA);

  }catch(PDOException $erro){

      //echo "Erro de conexão, detalhes: " . $erro->getMessage();
      echo "conexao_erro";
  }
?>
