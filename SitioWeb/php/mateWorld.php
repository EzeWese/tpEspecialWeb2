<?php

  function mateWorld(){

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matepedia</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="icon" href="imagenes/mate.png">
</head>

<body>
  <header class="container-fluid noPadding">
    <h1 class="text-center align-top">MATEPEDIA</h1>
    <nav class="navbar navbar-expand-md navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  " id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <button class="btn btn-lg"><img src="imagenes/mate.png" width="32" height="32" class="d-inline-block align-top " alt=""></button>
          </li>
          <li class="nav-item active">
            <button class="js_btn btn btn-lg" method="get" action="">Home</button>
          </li>
          <li class="nav-item">
            <button class="js_btn btn btn-lg" method="get" action="historia">Historia</button>
          </li>
          <li class="nav-item">
            <button class="js_btn btn btn-lg" method="get" action="mateWorld">Por el Mundo</button>
          </li>
          <li class="nav-item">
            <button class="js_btn btn btn-lg" method="get" action="productos">Productos</button>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="cuerpo">
    <div class="row justify-content-center">
      <article class="principal col-12 col-md-10 ">
        <div class="mt-3">
          <h1 class="text-center">El mate por el mundo</h1>
          <h2 class="text-center subtitulo mt-4">"Mateando se entiende la gente..."</h2>
        </div>
        <div class="exportaciones row justify-content-center mt-5">
          <div class="col-12">
            <h2>Yerba mate argentina al exterior</h2>
            <p class="mt-3">Principales importadores de la yerba mate producida en nuestro país</p>
            <table class="table mt-3">
              <thead>
                <th>Destino</th>
                <th>Peso neto (Kg)</th>
                <th>Monto FOB</th>
              </thead>
              <tbody>
                <tr>
                  <td>Siria</td>
                  <td>8.733.800</td>
                  <td>3.596.612</td>
                </tr>
                <tr>
                  <td>Chile</td>
                  <td>1.397.650</td>
                  <td>3.596.612</td>
                </tr>
                <tr>
                  <td>Israel</td>
                  <td>220.190</td>
                  <td>772.582</td>
                </tr>
                <tr>
                  <td>EE UU</td>
                  <td>214.073</td>
                  <td>767.669</td>
                </tr>
                <tr>
                  <td>Libano</td>
                  <td>246.998</td>
                  <td>680.402</td>
                </tr>
                <tr>
                  <td>España</td>
                  <td>168.290</td>
                  <td>507.700</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-10">
            <img class="mapaexportaciones" src="imagenes/exportaciones.jpg" alt="">
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="galeriaporelmundo col-8 mb-4">
            <h2 class="text-center">Por el mundo</h2>
            <p class="mt-3">El mate es para algunos argentinos un pasaporte, un traductor, una forma de distinguirse en el mundo, ya sea como
              turista o residente en algún país, como un apasionado de eso tan distintivo para nosotros: <span class="elmate">EL MATE</span></p>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active imgporelmundo">
                  <img class="d-block w-100" src="imagenes/alemania.jpg" alt="First slide">
                </div>
                <div class="carousel-item imgporelmundo">
                  <img class="d-block w-100" src="imagenes/paris.jpg" alt="Second slide">
                </div>
                <div class="carousel-item imgporelmundo">
                  <img class="d-block w-100" src="imagenes/antartida.jpg" alt="Third  slide">
                </div>
              </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
  <footer class="container-fluid">
    <p>Página creada por Ezequiel Wesenack y Patricio Prado para el trabajo especial de la cátedra de web1 de la carrera de
      Tudai 2018.</p>
  </footer>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>

<?php
  }
 ?>
