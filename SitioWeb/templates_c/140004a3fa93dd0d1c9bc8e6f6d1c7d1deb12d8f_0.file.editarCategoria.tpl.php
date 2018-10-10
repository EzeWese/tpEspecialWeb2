<?php
/* Smarty version 3.1.33, created on 2018-10-11 01:03:21
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe8539d2f5a1_56645419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140004a3fa93dd0d1c9bc8e6f6d1c7d1deb12d8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\editarCategoria.tpl',
      1 => 1539212592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bbe8539d2f5a1_56645419 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matepedia</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <link rel="icon" href="imagenes/mate.png">
  <base href="<?php echo $_SERVER['SERVER_NAME'];?>
" target="_blank"> //PROBLEMA CON SERVER SMARTY
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
            <a class="btn btn-lg" href="home" target="_self"><img src="imagenes/mate.png" width="32" height="32" class="d-inline-block align-top " alt=""></a>
          </li>
          <li class="nav-item active">
            <a class="js_btn btn btn-lg" href="home" target="_self">Home</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="historia" target="_self">Historia</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="mundo" target="_self">Por el Mundo</a>
          </li>
          <li class="nav-item">
            <a class="js_btn btn btn-lg" href="productos" target="_self">Productos</a>
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
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarCategoria" target="_self">
          <input type="hidden" class="form-control" id="IdCategoria" name="IdCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_categoria'];?>
" required>
          <div class="form-group">
            <label for="nombreCategoria">Nombre de Categoria</label>
            <input type="text" class="form-control respuestas" id="nombreCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['nombre'];?>
" placeholder="" name="nombreCategoria" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion"  placeholder="" name="descripcion" required><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['descripcion'];?>
</textarea>
          </div>

          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
          </div>
        </form>
      </div>
    </article>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
