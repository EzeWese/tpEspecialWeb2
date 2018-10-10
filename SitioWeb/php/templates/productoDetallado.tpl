<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matepedia</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="icon" href="imagenes/mate.png">
  <base href="{$smarty.server.SERVER_NAME}" target="_blank">
</head>

<body>
  <header class="container-fluid noPadding">
    <h1 class="text-center align-top">MATEPEDIA</h1>
    <nav class="navbar navbar-expand-md navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-lg" href="{$home}/home" target="_self"><img src="../imagenes/mate.png" width="32" height="32" class="d-inline-block align-top " alt=""></a>
          </li>
          <li class="nav-item active">
            <a class="js_btn btn btn-lg" href="{$home}/home" target="_self">Home</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="{$home}/historia" target="_self">Historia</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="{$home}/mundo" target="_self">Por el Mundo</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="{$home}/productos" target="_self">Productos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<div class="cuerpo">

  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center mt-3">
        <h1 class="text-center">Nuestros Productos</h1>
        <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
      </div>
      <div class="informaciongeneral  test mt-5 mb-3">
          <div class="col-6">
            <h2>Productos</h2>
          </div>

        <div class="table-responsive">
        <table class="table mb-3 mt-2">
            <thead>
              <tr>
              <th scope="col">Producto</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Categoria</th>
              <th scope="col">Precio</th>
            </tr>
          </thead>
          <tbody class="tabla-opiniones">
              <tr class="btn-centrado">
                <td>{$Producto['nombre']}</td>
                <td>{$Producto['descripcion']}</td>
                <td>{$Producto['categoria']}</td>
                <td>{$Producto['precio']}</td>
              </tr>
          </tbody>
        </table>
        </div>
      </div>
      <div class="informaciongeneral encuesta row mb-3">
          <form method="post" action="{$home}/productos" target="_self">
            <div class="botonesForm ml-3">
              <button type="submit" class="btn btn-lg btn-enviar">Volver al listado</button>
            </div>
          </form>
      </div>
      <div class="informaciongeneral mt-3">
        <h2>Administrador</h2>
      </div>

      <div class="informaciongeneral encuesta row mb-3">
          <form method="post" action="login" target="_self">
            <div class="botonesForm ml-3">
              <button type="submit" class="btn btn-lg btn-enviar">Login</button>
            </div>
          </form>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
