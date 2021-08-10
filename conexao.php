<?php
define('HOST', ''); //nome do host
define('USUARIO', ''); //nome do usuario
define('SENHA', ''); //senha
define('DB', ''); //nome do banco

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
