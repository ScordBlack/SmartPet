<?php
define('HOST', 'localhost');
define('USUARIO', 'id9609465_root');
define('SENHA', '12345');
define('DB', 'id9609465_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
