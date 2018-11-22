<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:33:10
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6be26484ac7_98965622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca7af308c0ab4b4220f4a8ed47fbf779b62f1bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productos.tpl',
      1 => 1542897166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bf6be26484ac7_98965622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="informaciongeneral encuesta row mt-3 mb-3">
      <div class="ml-4">
        <h2>Usuario</h2>
      </div>
      <div class="">
        <form method="post" action="login" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Login</button>
          </div>
        </form>
      </div>
      <div class="">
        <form method="post" action="register" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Registrarse</button>
          </div>
        </form>
      </div>
    </div>
    <div class="justify-content-center mt-3">
      <h1 class="text-center">Nuestros Productos</h1>
      <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
    </div>
    <div class="informaciongeneral  test mt-5 mb-3">
      <div class="table-responsive">
        <table class="table mb-3 mt-2">
          <thead>
            <tr>
              <th scope="col">Producto</th>
              <th scope="col">Categoria
                <form class="row" action="filtrarPorCategoria" method="post" target="_self">
                  <div class="col">

                    <select class="form-control respuestas" id="categoria" name="IdCategoria">
                      <option value=""></option>
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
              <td><a type="button" class="btn btn-enviar" href="detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
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
