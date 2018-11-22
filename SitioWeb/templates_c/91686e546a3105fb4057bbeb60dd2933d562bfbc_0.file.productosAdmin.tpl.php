<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:35:36
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6beb8df2f20_55498903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91686e546a3105fb4057bbeb60dd2933d562bfbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productosAdmin.tpl',
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
function content_5bf6beb8df2f20_55498903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <h1 class="text-center mt-3 mb-4">Administrador</h1>
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
      <div class="">
        <form method="post" action="register" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Registrar Nuevo Usuario</button>
          </div>
        </form>
      </div>
    </div>
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
      <div class="mt-5">
        <h2>Crear Nueva Categoria</h2>


        <form action="nuevaCategoria" method="post" target="_self">
          <div class="form-group mt-4">
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
    <div class="informaciongeneral row test mt-5 mb-3">
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
              <td><a type="button" class="btn btn-enviar" href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" target="_self">BORRAR</a></td>
              <td><a type="button" class="btn btn-enviar" href="editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
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
        </thead>
        <tbody class="tabla-opiniones">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <tr class="btn-centrado">
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</td>
            <td><a type="button" class="btn btn-enviar" href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" target="_self">Borrar Categoria</a></td>
            <td><a type="button" class="btn btn-enviar " href="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" target="_self">Editar Categoria</a></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>


    </div>
    <div class="col-12">
      <table class="table mb-3 mt-2">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo de Usuario</th>
            <th scope="col">Borrar</th>
            <th scope="col">Hacer admin</th>
          </tr>
        </thead>
        <tbody class="tabla-opiniones">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
          <tr class="btn-centrado">
            <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 1) {?>
              Admin
              <?php } else { ?>
              Usuario
              <?php }?>
            </td>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['usuario']->value['id_usuario'] != $_smarty_tpl->tpl_vars['UserId']->value) {?>
              <a type="button" class="btn btn-enviar" href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" target="_self">Borrar Usuario</a>
            </td>
            <?php }?>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] == 1) {?>
              
              <?php } else { ?>
              <a type="button" class="btn btn-enviar " href="darPermiso/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" target="_self">Dar Permiso</a>
              <?php }?>
            </td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </article>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
