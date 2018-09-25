<?php

  function Historia(){

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
        <div class="justify-content-center mt-3">
          <h1 class="text-center">Un poco de historia</h1>
          <h2 class="text-center mt-4 subtitulo">"El nacimiento de una pasion"</h2>
        </div>
        <div class="informaciongeneral mt-5">
          <div class="info">
            <h2>¿Cuál es su origen?</h2>
            <p class="mt-3">El mate es una bebida de América del Sur, sumamente popular en Argentina, Brasil, Uruguay y Paraguay. Para entender
              su importancia actual, es necesario conocer su historia.</p>
          </div>
        </div>
        <div class="informaciongeneral row mt-5">
          <div class="info col-12 col-md-6">
            <h2>El mate y los guaraníes</h2>
            <p class="mt-3">El consumo de mate se remonta al pueblo guaraní (indígenas nativos que estaban en algunos países de Sudamérica),
              según confirmaron las investigaciones del ensayista y periodista Amaro Villanueva. Ellos masticaban directamente
              las hojas o las colocaban en una calabaza con agua y sorbían. De hecho, la palabra “mate” viene del guaraní “Caa­mate”
              (“Caa” sería planta o hierba, y “mate” se refiere a la calabaza donde la bebían). Otros pueblos como los los
              incas, los charrúas y aún los araucanos adoptaron el mate gracias a trueques con los guaraníes. Para los indígenas,
              el árbol de mate era un regalo sagrado de los dioses, y de hecho el mate tenía para ellos un significado especial
              y espiritual, además de su valor nutritivo.</p>
          </div>
          <div class="info col-12 col-md-6">
            <h2>Época Colonial</h2>
            <p class="mt-3">Gracias a sus virtudes y beneficios, el mate pronto se volvió popular entre los españoles que llegaron a colonizar
              América del Sur. La yerba comenzó a llevarse desde su lugar de origen a todo el territorio que estaba bajo el
              dominio español, y sobretodo los jesuitas fueron los responsables de extender ampliamente su uso al incluir el
              mate en sus reducciones, aunque la tomaban en forma de mate en saquitos y no con bombilla. Ellos también habían
              descubierto que la planta germinaba sólo en esta región del mundo, un secreto confirmado medio siglo después
              por el naturalista francés Aimé Bonpland.</p>
          </div>
        </div>
        <div class="informaciongeneral row mt-5 mb-4">
          <div class="info col-12 col-md-6">
            <h2>La nueva cultura del Gaucho</h2>
            <p class="mt-3">Durante el largo proceso de la independencia de Argentina en el siglo XIX, la costumbre de tomar mate se fortaleció
              dentro del folclore nacional. Los “gauchos” (una especie de vaquero argentino) adoptaron el mate como parte de
              su cultura, así como montar a caballo y usar ropa de cuero. Tomaban mate en grupo, para el desayuno, para el
              almuerzo, la cena y antes de dormir.</p>
          </div>
          <div class="info col-12 col-md-6">
            <h2>En la Actualidad</h2>
            <p class="mt-3">La yerba mate se cultiva en Argentina, Paraguay y el sur de Brasil, donde las condiciones de terreno, temperatura
              y humedad son las ideales. Al igual que aquellos gauchos de antaño, el mate forma parte del día a día de un argentino
              promedio. Se consume por igual en casas, oficinas, parques, universidades y plazas, no sólo por sus propiedades
              como infusión, sino por su papel como lazo social.</p>
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
