<?php
    require_once "productos.php";

    function Productos() {

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
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center mt-3">
        <h1 class="text-center">Nuestros Productos</h1>
        <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
      </div>
      <div class="informaciongeneral mt-5">
        <h2>(Solos usuarios con contraseña cargan Productos)</h2>
      </div>
      <div class="informaciongeneral encuesta">
        <form method="post" action="agregar">
          <div class="form-group">
            <label for="nombre">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombre" value="" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcionP">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcionP" placeholder="" name="descripcion"></textarea>
          </div>
          <div class="form-group">
            <label for="categoriaProducto">Categoria</label>
            <input type="text" class="form-control respuestas" id="categoriaProducto" placeholder="" name="categoria">
          </div>
          <div class="form-group">
            <label for="precioP">Precio</label>
            <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio">
          </div>
          <div class="botonesForm">
            <button type="submit" class="btn btn-lg btn-enviar">Cargar</button>
          </div>
        </form>
        </div>
        <div class="informaciongeneral row test mt-3 mb-3">
          <div class="col-6">
            <h2>Productos</h2>
          </div>
          <div class="col-6 filtro">
            <div class="row">
              <form class="">
                <label>Filtrar por Categoria</label>
                <input class="filtrar" type="text">
              </form>
              <button class="btn-filtrar">Filtrar</button>
              <button class="btn-limpiar">Limpiar Filtros</button>
            </div>
          </div>
          <div class="table-responsive">
          <table class="table mb-3 mt-2">
            <thead>
              <tr>
              <th scope="col">Producto</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Categoria</th>
              <th scope="col">Precio</th>
              <th>Borrar</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody class="tabla-opiniones">
            <?php

              foreach (getProductos() as $producto){
                echo '<tr class="btn-centrado"><td>'.$producto['nombre'].'</td><td>'.$producto['descripcion'].'</td><td>'.$producto['categoria'].'</td><td>'.$producto['precio'].'</td></tr>';
              }
            ?>

          </tbody>
        </table>
        </div>
      </div>
    </article>
  </div>
  <footer class="container-fluid">
    <p>Página creada por Ezequiel Wesenack y Patricio Prado para el trabajo especial de la cátedra de web2 de la carrera de
      Tudai 2018.</p>
  </footer>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
  }
 ?>
