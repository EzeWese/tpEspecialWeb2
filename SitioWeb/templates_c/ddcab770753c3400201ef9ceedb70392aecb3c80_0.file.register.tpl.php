<?php
/* Smarty version 3.1.33, created on 2018-11-22 18:12:04
  from 'C:\xampp\htdocs\Proyects\tpEspecialWeb2\SitioWeb\php\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6e3649be6f6_78897852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcab770753c3400201ef9ceedb70392aecb3c80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\tpEspecialWeb2\\SitioWeb\\php\\templates\\register.tpl',
      1 => 1542906722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bf6e3649be6f6_78897852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Nuevo </h2>
    </div>
    <div class="informaciongeneral encuesta mt-3">
      <form method="post" action="verificarRegister" target="_self">
        <div class="form-group">
          <label for="usuarioId">Usuario</label>
          <input type="input" class="form-control respuestas" id="usuarioId" value="" placeholder="Usuario" name="usuarioId" required>
        </div>
        <div class="form-group">
          <label for="passwordId">Password</label>
          <input type="password" class="form-control respuestas" id="passwordId" placeholder="Password" name="passwordId" required>
        </div>
        <div class="">
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
        <div class="botonesForm mt-3 mb-3">
          <button type="submit" class="btn btn-lg btn-enviar">Register</button>
        </div>
      </form>
    </div>
  </article>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
