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
          <a class="navbar-brand absolute" href="painel.php" >Smart Pet</a>
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

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Nós amamos Pets</h1>
              <p class="mb-5">Amamos os Pets e desenvolvemos um produto visando a saúde com a alimentação saudável.</p>
              <p><a href="sobre.html" class="btn btn-white btn-outline-white" target="_blank">Saiba mais</a></p>
            </div>
          </div>
        </div>

      </div>

      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>O cuidado necessário</h1>
              <p class="mb-5">Com o alimentador automatico, seu pet não perderá uma refeição.</p>
              <p><a href="sobre.html" class="btn btn-white btn-outline-white" target="_blank">Saiba mais</a> </p>
            </div>
          </div>
        </div>

      </div>

    </section>

    <section class="section element-animate">


          <div class="col-md-4 mb-4">
            <iframe height="780" width="1870" scrolling='NO' src="https://specialdog.com/calculadora/" style="border:0;"></iframe>
          </div>
          <font size="2" face="Times"  	color="#333333"><b>As quantidades indicadas são uma orientação.
                         A necessidade energética de seu cão ou gato pode variar conforme a raça,
                         linhagem, porte,sexo, estilo de vida e temperamento. Se seu animal for gestante ou lactante,
                         entre em contato com o SAC. Em caso de dúvidas, utilize nosso SAC 0800 707 5188 </b></font>
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

          <div class="col-md-3 mb-5">
            <h3>&#8198</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="">&#8198</a></li>
                <li><a href="">&#8198</a></li>
              <li><a href="">&#8198</a></li>
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
