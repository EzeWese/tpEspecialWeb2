<?php
/* Smarty version 3.1.33, created on 2018-10-19 16:51:31
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\mateWorld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9ef73ab4180_45232301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa230a218b9ddcfded60df2a33972d54ffa5110d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\mateWorld.tpl',
      1 => 1539960159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bc9ef73ab4180_45232301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
