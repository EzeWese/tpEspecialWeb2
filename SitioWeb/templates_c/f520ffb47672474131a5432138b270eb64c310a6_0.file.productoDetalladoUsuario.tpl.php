<?php
/* Smarty version 3.1.33, created on 2018-11-22 18:14:59
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\productoDetalladoUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6e4138b7496_48435033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f520ffb47672474131a5432138b270eb64c310a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productoDetalladoUsuario.tpl',
      1 => 1542897166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
  ),
),false)) {
function content_5bf6e4138b7496_48435033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Producto</h2>
    </div>
    <div class="justify-content-center informaciongeneral encuesta">
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user" target="_self">
        <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" required>
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre'];?>
" placeholder="" name="nombreProducto" disabled>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" disabled><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion'];?>
</textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <input type="text" class="form-control respuestas" id="Categoria" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['categoria'];?>
" name="IdCategoria" disabled>
        </div>
        <div class="form-group">
          <label for="precioP">Precio</label>
          <input type="text" class="form-control respuestas" id="precioP" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio'];?>
" placeholder="" name="precio" disabled>
        </div>
        <div class="justify-content-center informaciongeneral mt-3 mb-3">
          <h3>Imágenes</h3>
        </div>
      </form>
      <div class="row justify-content-center mt-4">
        <div class="galeriaporelmundo col-8 mb-4">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner ">
              <div class="carousel-item active imgporelmundo">
                <img class="d-block w-100" src="imagenes/mate.png" alt="FOTOS DEL PRODUCTO">
              </div>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
              <div class="carousel-item  imgporelmundo">
                <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" alt="">
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    </div>

      <div class="informaciongeneral encuesta row mt-3 mb-3">
        <div class="ml-4">
          <h2>Comentarios</h2>
        </div>
        <div class="puntajeMargen">
          <h2>Puntaje</h2>
        </div>
        <div class="botonesForm ml-2">
          <button value="asc" type="submit" class="btn btn-lg btn-Ascendente">Ascendente</button>
        </div>
        <div class="botonesForm ml-2">
          <button value="desc" type="submit" class="btn btn-lg btn-Descendente">Descendente</button>
        </div>
      </div>

      <div id="comentarios-container" class="mt-3">

      </div>
      <div class="mt-3">
        <h3>Nuevo Comentario</h3>
        <div class="informaciongeneral encuesta mt-3 mb-3">
          <form method="" action="" target="_self">
            <div class="form-group">
              <textarea name="comentario" class="form-control comentario" id="comentario" placeholder="Nuevo Comentario" name="comentario" required></textarea>
            </div>
            <div class="form-group">
              <label for="puntaje">Puntaje</label>
              <input type="number" min="1" max="5" class="form-control comentario" id="puntaje" value="" placeholder="Puntaje" name="puntaje" required>
            </div>
          </form>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviarComentario">Comentar</button>
          </div>
        </div>
      </div>
      <div class="informaciongeneral encuesta mt-3 mb-3">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user" target="_self">
          <div class="botonesForm mt-3 ">
            <button type="submit" class="btn btn-lg btn-enviar">Volver</button>
          </div>
        </form>
      </div>





  </article>
</div>
<footer class="container-fluid">
  <p>Página creada por Ezequiel Wesenack y Patricio Prado para el trabajo especial de la cátedra de web2 de la carrera de
    Tudai 2018.</p>
</footer>
<?php echo '<script'; ?>
 src="js/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/handlebars-v4.0.12.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/mainUser.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
