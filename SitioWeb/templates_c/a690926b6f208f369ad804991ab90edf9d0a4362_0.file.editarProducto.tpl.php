<?php
/* Smarty version 3.1.33, created on 2018-11-22 04:20:49
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf62091bca598_15551168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a690926b6f208f369ad804991ab90edf9d0a4362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\editarProducto.tpl',
      1 => 1542856823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
  ),
),false)) {
function content_5bf62091bca598_15551168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3 mb-3">
      <h2>Editar Producto</h2>
    </div>
    <div class="justify-content-center informaciongeneral encuesta">
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardar" enctype="multipart/form-data" target="_self">
        <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" required>
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre'];?>
" placeholder="" name="nombreProducto" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" required><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion'];?>
</textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select class="form-control respuestas" id="categoria" name="IdCategoria" required>
            <option value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['categoria'];?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>

            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</option>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          </select>
        </div>
        <div class="form-group">
          <label for="precioP">Precio</label>
          <input type="text" class="form-control respuestas" id="precioP" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['precio'];?>
" placeholder="" name="precio" required>
        </div>
        <div class="form-group">
          <label for="imagenes[]">Imágenes</label>
          <input type="file" class="form-control-file respuestas" id="imagenes[]" placeholder="" name="imagenes[]" multiple>
        </div>
        <div class="botonesForm mt-3 mb-3">
          <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
        </div>
      </form>
      <div class="justify-content-center informaciongeneral mt-3 mb-3">
        <h3>Imágenes</h3>
      </div>
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
      <div class="mb-3 imagenProducto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
        <form class="" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/borrarImagen" method="post" target="_self">
          <div class="input-group">
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" name="IdImagen" id="IdImagen" hidden>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_producto'];?>
" name="IdImagenProducto" id="IdImagenProducto" hidden>
            <input type="text" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" aria-label="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" aria-describedby="basic-addon2" disabled>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Borrar</button>
            </div>
          </div>
        </form>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

    <div id="comentarios-container" class="mt-3 mb-3">

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
/admin" target="_self">
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
 src="js/mainAdmin.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
