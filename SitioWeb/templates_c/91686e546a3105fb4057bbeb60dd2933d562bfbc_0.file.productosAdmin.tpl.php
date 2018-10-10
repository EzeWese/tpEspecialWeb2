<?php
/* Smarty version 3.1.33, created on 2018-10-10 23:13:38
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbe6b8249c639_26751003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91686e546a3105fb4057bbeb60dd2933d562bfbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productosAdmin.tpl',
      1 => 1539206013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bbe6b8249c639_26751003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Cargar Producto</h2>
      </div>
      <div class="informaciongeneral encuesta">
        <form method="post" action="agregar" target="_self">
          <div class="form-group">
            <label for="nombreProducto">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombreProducto" value="" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion"></textarea>
          </div>
          <div class="form-group">
            <label for="categoria">Categoria</label>
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
          <div class="form-group">
            <label for="precioP">Precio</label>
            <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio">
          </div>
          <div class="">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          </div>
          <div class="botonesForm">
            <button type="submit" class="btn btn-lg btn-enviar">Cargar</button>
          </div>
        </form>
        <form action="nuevaCategoria" method="post" target="_self">
          <div class="form-group">
            <label for="nuevaCategoria">Nombre</label>
            <input id="nuevaCategoria"type="text" name="nuevaCategoria" value="" required>
            <label for="descripcionNuevaCategoria">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcionNuevaCategoria" placeholder="" name="descripcionNuevaCategoria" required></textarea>
            </div>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Nueva Categoria</button>
          </div>
        </form>
        <form action="post" method="logout" target="_self">
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Logout</button>
          </div>
        </form>
        </div>
        <div class="informaciongeneral row test mt-3 mb-3">
          <div class="col-6">
            <h2>Productos</h2>
          </div>
          <div class="col-6 filtro">
            <div class="row">
              <form class="">
                <label>Filtrar por Categoria</label>
                <input class="filtrar" type="text">
              </form>
              <button class="btn-filtrar">Filtrar</button>
              <button class="btn-limpiar">Limpiar Filtros</button>
            </div>
          </div>
          <div class="table-responsive">
          <table class="table mb-3 mt-2">
            <thead>
              <tr>
              <th scope="col">Producto</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Categoria</th>
              <th scope="col">Precio</th>
              <th>Borrar</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody class="tabla-opiniones">


              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>

                <tr class="btn-centrado">
                  <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['categoria'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
                  <td><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" target="_self">BORRAR</a></td>
                  <td><a href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" target="_self">EDITAR</a></td>
                </tr>

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


          </tbody>
        </table>
        </div>
      </div>
      <form method="post" action="register" target="_self">
        <div class="botonesForm mt-3">
          <button type="submit" class="btn btn-lg btn-enviar">Register</button>
        </div>
      </form>
    </article>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
