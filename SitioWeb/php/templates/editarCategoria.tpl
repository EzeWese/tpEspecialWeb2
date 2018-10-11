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
            <a class="btn btn-lg" href="{$home}/home" target="_self"><img src="imagenes/mate.png" width="32" height="32" class="d-inline-block align-top " alt=""></a>
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
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Editar Categoria</h2>
      </div>
      <div class="justify-content-center informaciongeneral encuesta">
        <form method="post" action="{$home}/guardarCategoria" target="_self">
          <input type="hidden" class="form-control" id="IdCategoria" name="IdCategoria" value="{$Categoria['id_categoria']}" required>
          <div class="form-group">
            <label for="nombreCategoria">Nombre de Categoria</label>
            <input type="text" class="form-control respuestas" id="nombreCategoria" value="{$Categoria['nombre']}" placeholder="" name="nombreCategoria" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion"  placeholder="" name="descripcion" required>{$Categoria['descripcion']}</textarea>
          </div>

          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
          </div>
        </form>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
