<?php
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>
  <header role="banner">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand absolute" href="index.html">Smart Pet</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsExample05">
					<ul class="navbar-nav mx-auto pl-lg-5 pl-0">
						<li class="nav-item">
							<a class="nav-link active" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="sobre.html">Sobre</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="contato.html">Contato</a>
						</li>
            <li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>

  <section class="hero is-success is-fullheight">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
                    <span class="login100-form-title p-b-70">Inscreva-se</span>

                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                            <div class="wrap-input100 validate-input m-b-50">
                                    <input class="input100" name="nome" name="text" class="input is-large" placeholder="Nome" autofocus="" required>

                                    <span class="focus-input100" ></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                          <div class="wrap-input100 validate-input m-b-50">
                                      <input class="input100" name="usuario" name="text" class="input is-large" placeholder="Usuário" autofocus="" required>
                                      <span class="focus-input100" ></span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                  <div class="wrap-input100 validate-input m-b-50">
                                  <input class="input100" name="senha" class="input is-large" type="password" placeholder="Sua senha" required>
                                  <span class="focus-input100" ></span>

                                </div>
                            </div>
                            <span class="login100-form-title p-b-20">
                            <?php
                            if (isset($_SESSION['status_cadastro'])):
                             ?>
                            <div class="notification is-success">
                              <p>Cadastro efetuado com sucesso!</p>
                              <p>Faça o login clicando<a href="login.php" class="txt2"> aqui</a></p>
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['status_cadastro']);
                             ?>
                            <?php
                            if (isset($_SESSION['usuario_existe'])):
                            ?>

                            <div class="notification is-info">
                                <p>O usuário já existe</p>
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['usuario_existe']);
                             ?>
                             </span>
                            <button type="submit" class="login100-form-btn">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
