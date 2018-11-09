<?php
/* Smarty version 3.1.33, created on 2018-11-09 05:41:22
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be50ff2636a79_31155684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377b8cbceb33ffae1000c18f20107250f0220dae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productosAdmin.tpl',
      1 => 1541738302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5be50ff2636a79_31155684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Cargar Producto</h2>
    </div>
    <div class="informaciongeneral encuesta">
      <form method="post" action="agregar" enctype="multipart/form-data" target="_self">
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto*</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="" placeholder="" name="nombreProducto" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion*</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" required></textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria*</label>
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
          <label for="precioP">Precio*</label>
          <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio" required>
        </div>
        <div class="form-group">
          <label for="imagenes[]">Imágenes</label>
          <input type="file" class="form-control-file respuestas" id="imagenes[]" placeholder="" name="imagenes[]" multiple>
        </div>
        <div class="botonesForm">
          <button type="submit" class="btn btn-lg btn-enviar">Cargar nuevo producto</button>
        </div>
      </form>
      <div class="mt-3">
        <h2>Crear nueva Categoria</h2>


        <form action="nuevaCategoria" method="post" target="_self">
          <div class="form-group">
            <label for="nuevaCategoria">Nombre*</label>
            <input id="nuevaCategoria" type="text" name="nuevaCategoria" value="" required>
          </div>
          <div class="form-group">
            <label for="descripcionNuevaCategoria">Descripcion*</label>
            <textarea class="form-control respuestas" id="descripcionNuevaCategoria" placeholder="" name="descripcionNuevaCategoria" required></textarea>
          </div>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Nueva Categoria</button>
          </div>
        </form>
      </div>

    </div>
    <div class="informaciongeneral row test mt-3 mb-3">
      <div class="col-6">
        <h2>Productos</h2>
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
              <td><a type="button"class="btn btn-enviar" href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" target="_self">BORRAR</a></td>
              <td><a type="button"class="btn btn-enviar" href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
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
    <div class="col-12">
      <table class="table mb-3 mt-2">
        <thead>
          <tr>
            <th scope="col">Categorias</th>
            <th scope="col">Borrar</th>
            <th scope="col">Editar</th>
        <tbody class="tabla-opiniones">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <tr class="btn-centrado">
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</td>
            <td><a type="button"class="btn btn-enviar" href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" target="_self">Borrar Categoria</a></td>
            <td><a type="button"class="btn btn-enviar " href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" target="_self">Editar Categoria</a></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>

    </div>
    <form action="post" method="logout" target="_self">
      <div class="botonesForm mt-3">
        <button type="submit" class="btn btn-lg btn-enviar">Cerrar sesion</button>
      </div>
    </form>
    <form method="post" action="register" target="_self">
      <div class="botonesForm mt-3">
        <button type="submit" class="btn btn-lg btn-enviar">Registrar nuevo usuario</button>
      </div>
    </form>
  </article>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
