<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:52:33
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6c2b1a3f4d2_01902415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '140004a3fa93dd0d1c9bc8e6f6d1c7d1deb12d8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\editarCategoria.tpl',
      1 => 1542896912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bf6c2b1a3f4d2_01902415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Editar Categoria</h2>
    </div>
    <div class="justify-content-center informaciongeneral encuesta">
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/guardarCategoria" target="_self">
        <input type="hidden" class="form-control" id="IdCategoria" name="IdCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['id_categoria'];?>
" required>
        <div class="form-group">
          <label for="nombreCategoria">Nombre de Categoria</label>
          <input type="text" class="form-control respuestas" id="nombreCategoria" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['nombre'];?>
" placeholder="" name="nombreCategoria" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" required><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['descripcion'];?>
</textarea>
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
