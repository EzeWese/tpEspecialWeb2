<?php
/* Smarty version 3.1.33, created on 2018-11-14 21:49:33
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec8a5d7c43f1_07130918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '624cb38789998d82e44854d41897481d24994fe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\header.tpl',
      1 => 1542228570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec8a5d7c43f1_07130918 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Matepedia</title>
  <base href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/" target="_blank">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="icon" href="imagenes/mate.png">
  <base href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/" target="_blank">
</head>

<body>
  <header class="container-fluid noPadding">
    <h1 class="text-center align-top">MATEPEDIA</h1>
    <nav class="navbar navbar-expand-md navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
<?php }
}
