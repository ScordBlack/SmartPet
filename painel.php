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
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-4"></div>
          <div class="col-md-8 section-heading">
            <h2>O Smart Pet</h2>
            <p class="small-sub-heading">Programe o horário e a quantidade de ração</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-4">
            <a href="http://localhost/calculadora.php"><img src="img/calculadora.png" alt="Image placeholder" class="img-fluid"></a>

          </div>
          <div class="col-md-4">
            <form action="" method="POST">

              <label for="hora1">Horário 1:&#8198 &#8198 &#8198 </label>
              <input type="time" name="hora1" step="1"required>  </br>
              <label for="quant1">Quantidade:</label>
              <input type="number" placeholder="Em gramas" min="10" step="10" name="quant1" style="width:130px;" required>  </br>
              </br>
              <label for="hora2">Horário 2:&#8198 &#8198 &#8198</label>
              <input type="time" name="hora2" step="1">  </br>
              <label for="quant2">Quantidade:</label>
              <input type="number" placeholder="Em gramas" min="10" step="10" name="quant2" style="width:130px;">  </br>
              </br>
              <label for="hora3">Horário 3:&#8198 &#8198 &#8198</label>
              <input type="time" name="hora3" step="1">  </br>
              <label for="quant3">Quantidade:</label>
              <input type="number"  placeholder="Em gramas" min="10" step="10" name="quant3" style="width:130px;">
              </br>
              <input type="submit" name="submit" value="Enviar">
            </form>

          </div>
          <div class="col-md-4">
            <?php

              include('conexaoa.php');

              if($_SERVER['REQUEST_METHOD'] == "POST"){

                $hora1 = $_POST["hora1"];
                $quant1 = $_POST["quant1"];
                $hora2 = $_POST["hora2"];
                $quant2 = $_POST["quant2"];
                $hora3 = $_POST["hora3"];
                $quant3 = $_POST["quant3"];

                $sql = "UPDATE usuario SET hora1 = '$hora1',quant1 = '$quant1',hora2 = '$hora2',quant2 = '$quant2',hora3 = '$hora3',quant3 = '$quant3' WHERE nome='".$_SESSION['nome']."'";

                $stmt = $PDO->prepare($sql);
                $stmt->execute();

              }else{



              }

              $sql = "SELECT * FROM usuario where nome='".$_SESSION['nome']."'";

              $stmt = $PDO->prepare($sql);
              $stmt->execute();

              echo "<table border=\"2\">";

              echo "<tr> <th><h3>&#8198 Horário &#8198</h3></th> <th><h3>&#8198 Quantidade &#8198</h3></th> </tr>";

              while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {

                echo "<tr>";
                echo "<td align='center'><h5>". $linha->hora1 ."</h5></td>";
                echo "<td align='center'><h5>". $linha->quant1 ."</h5></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td align='center'><h5>". $linha->hora2 ."</h5></td>";
                echo "<td align='center'><h5>". $linha->quant2 ."</h5></td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td align='center'><h5>". $linha->hora3 ."</h5></td>";
                echo "<td align='center'><h5>". $linha->quant3 ."</h5></td>";
                echo "</tr>";
              }

              echo"</table>";

            ?>

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
