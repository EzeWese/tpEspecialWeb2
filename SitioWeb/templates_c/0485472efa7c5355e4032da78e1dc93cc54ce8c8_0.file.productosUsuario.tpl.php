<?php
/* Smarty version 3.1.33, created on 2018-11-16 05:59:12
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\productosUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bee4ea0e264d8_84144509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0485472efa7c5355e4032da78e1dc93cc54ce8c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productosUsuario.tpl',
      1 => 1542344337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bee4ea0e264d8_84144509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="informaciongeneral encuesta row mt-3 mb-4">
      <div class="ml-4">
        <h2><?php echo $_smarty_tpl->tpl_vars['User']->value;?>
</h2>
      </div>
      <div class="">
        <form method="post" action="logout" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Cerrar Sesion</button>
          </div>
        </form>
      </div>
    </div>
    <div class="justify-content-center mt-3">
      <h1 class="text-center">Nuestros Productos</h1>
      <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
    </div>
    <div class="informaciongeneral  test mt-5 mb-3">
      <div class="col-6">
        <h2>Productos</h2>
      </div>
      <div class="table-responsive">
        <table class="table mt-2">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Categoria
                <form class="row" action="filtrarPorCategoria" method="post" target="_self">
                  <div class="col">
                    <select class="form-control respuestas" id="categoria" placeholder="" name="IdCategoria">
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
                  <div class="col">
                    <button type="submit" class="btn  btn-enviar ">Filtrar</button>
                    <a type="button" class="btn  btn-enviar " href="productos" target="_self">Limpiar filtro</a>
                  </div>
                </form>
              </th>
              <th scope="col">Precio</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="tabla-opiniones">


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>

            <ul class="btn-centrado">
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
              <td><a type="button" class="btn btn-enviar" href="detalleUser/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" target="_self">Detalles</a></td>
              </tr>

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


          </tbody>
        </table>
      </div>
    </div>
  </article>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
