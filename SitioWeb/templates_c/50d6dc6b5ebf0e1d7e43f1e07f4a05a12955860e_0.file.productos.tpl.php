<?php
/* Smarty version 3.1.33, created on 2018-11-13 05:24:33
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea5201cdcc92_08525098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d6dc6b5ebf0e1d7e43f1e07f4a05a12955860e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\productos.tpl',
      1 => 1542083064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bea5201cdcc92_08525098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center mt-3">
        <h1 class="text-center">Nuestros Productos</h1>
        <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
      </div>
      <div class="informaciongeneral  test mt-5 mb-3">
          <div class="col-6">
            <h2>Productos</h2>
          </div>
        <div class="table-responsive">
        <table class="table mb-3 mt-2">
            <thead>
              <tr>
              <th scope="col">Producto</th>
              <th scope="col">Categoria
                 <form class="row" action="filtrarPorCategoria" method="post" target="_self">
                  <div class="col">

                  <select class="form-control respuestas" id="categoria" name="IdCategoria">

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
                  <a type="button"class="btn  btn-enviar " href="productos" target="_self" >Limpiar filtro</a>
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
                  <td><a type="button"class="btn btn-enviar"href="detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
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
      <div class="informaciongeneral mt-3">
        <h2>Administrador</h2>
      </div>
      <div class="informaciongeneral encuesta row mb-3">
          <form method="post" action="login" target="_self">
            <div class="botonesForm ml-3">
              <button type="submit" class="btn btn-lg btn-enviar">Login</button>
            </div>
          </form>
      </div>
    </article>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
