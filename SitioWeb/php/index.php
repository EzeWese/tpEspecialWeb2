<?php

function Home(){

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

      <article class="principal col-12 col-md-10 justify-content-center">

        <div class="justify-content-center mt-3">
          <h1 class="text-center">Bienvenidos</h1>
          <h2 class="text-center mt-4 subtitulo">"Lo mismo que en ranchito, en la mansion del magnate, es rey y señor el mate"</h2>
        </div>

        <div class="informaciongeneral row mt-5">
          <div class="info col-12 col-md-6">
            <h2 class="text-center">¿Qué es el mate?</h2>
            <p class="mt-4">Se llama mate la infusión de hojas de yerba mate (Ilex paraguayensis), secadas y molidas, servidos en un recipiente
              del mismo nombre. Este recipiente, el más tradicional de todos, es una especie de calabaza “Lagenaria siceraria”
              de la cuál se obtiene el porongo, calabaza de peregrino o jícaro. Este fruto, una vez cultivado y seco se utiliza
              como recipiente para tomar mate, previamente debe ser curado.</p>
          </div>
          <div class="imageninformaciongeneral col-12 col-md-6">
            <img src="imagenes/fruto.jpg" alt="" class="img-thumbnail">
          </div>
        </div>
        <div class="informaciongeneral  row mt-5">
          <div class="info col-12 col-md-6">
            <h2 class="text-center">¿Qué es la yerba mate?</h2>
            <p class="mt-4">La yerba mate (su nombre científico es Ilex Paraguariensis) es un árbol nativo de la Selva Paranaense. En estado
              silvestre, alcanza una altura de entre 12 y 16 metros. Es ampliamente cultivada comercialmente en Argentina,
              Brasil y Paraguay (en orden de producción total) desde el siglo XIX, dando lugar a una importante industria.</p>
          </div>
          <div class="imageninformaciongeneral col-12 col-md-6 ">
            <img src="imagenes/yerbamate.jpg" alt="" class="img-thumbnail">
          </div>
        </div>
        <div class="informaciongeneral row mt-5">
          <div class="buenmate col-12">
            <h2>¿Cómo armar un buen mate?</h2>
            <ol class="mt-4">
              <li>
                <p>Llene el mate a dos tercios de su capacidad. Tape la boca del mate con la palma de la mano, inviértalo y sacuda
                  varias veces dejando la yerba recostada hacia un lado.</p>
              </li>
              <li>
                <p> Vierta una pequeña cantidad de agua fría o tibia en el costado más vacío. Coloque la bombilla donde volcó el
                  agua fría y agregue agua a temperatura entre 70°C y 80°C siempre en la zona de la bombilla.</p>
              </li>
              <li>
                <p>Deguste y compruebe las cualidades de un exquisito mate.</p>
              </li>
            </ol>
          </div>
          <div class="row galeriabuenmate col-12 mt-3">
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso1.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso2.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso2.jpg" alt="" class="img-thumbnail">
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
