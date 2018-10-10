<?php
/* Smarty version 3.1.33, created on 2018-10-08 17:55:02
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbb7dd6188ce8_81538639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a690926b6f208f369ad804991ab90edf9d0a4362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\editarProducto.tpl',
      1 => 1539014077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bbb7dd6188ce8_81538639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Editar Producto</h2>
      </div>
      <div class="justify-content-center informaciongeneral encuesta">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardar" target="_self">
          <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
">
          <div class="form-group">
            <label for="nombreProducto">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombreProducto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre'];?>
" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion"  placeholder="" name="descripcion"><?php echo $_smarty_tpl->tpl_vars['Producto']->value['descripcion'];?>
</textarea>
          </div>
          <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control respuestas" id="categoria" name="IdCategoria">
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
" placeholder="" name="precio">
          </div>
          <div class="">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

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
