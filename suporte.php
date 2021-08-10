<?php
//session_start();
include('verifica_login.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Smart Pet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand absolute" href="painel.php">Smart Pet</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="">&#8198</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">&#8198</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="">&#8198</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">&#8198</a>
              </li>
            </ul>
            <ul class="navbar-nav pl-lg-5 pl-0">
              <li class="nav-item">
                Olá, <?php echo $_SESSION['nome'];?>
            </ul>
                <a class="nav-link" href="logout.php">Sair</a>
              </li>

          </div>
        </div>
      </nav>
    </header>


    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contate-nos</h1>
              <p class="mb-5">Nos preocupamos com a satisfação do cliente. Contate-nos e um membro de nossa equipe irá responde-lo ainda hoje</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- END slider -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nome</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Telefone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">

                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Escreva sua mensagem</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 order-2 mb-5">
            <div class="row justify-content-right">
              <div class="col-md-8 mx-auto contato-form-contato-info">
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Rua Imaculada da Conceição, 1368 - Curitiba PR</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+55 41 3383-3316</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>contato@smartpet.com</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>Smart Pet</h3>
            <p class="mb-5">Siga-nos nas redes sociais para ficar por dentro das novidades de produto lançados e promoções.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <h3>Contato</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Endereço:</span>
                <span class="text-white">Rua Imaculada da Conceição, 1368 - Curitiba PR</span></li>
              <li class="d-block"><span class="d-block">Telefone:</span><span class="text-white">+55 41 3383-3316</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span class="text-white">contato@smartpet.com</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Links Rápidos</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Sobre</a></li>
                <li><a href="#">Login</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">

          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
