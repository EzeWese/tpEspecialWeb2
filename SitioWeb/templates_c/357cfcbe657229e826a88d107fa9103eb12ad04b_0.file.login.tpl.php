<?php
/* Smarty version 3.1.33, created on 2018-10-04 05:32:46
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb589ded0f956_94971532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '357cfcbe657229e826a88d107fa9103eb12ad04b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\login.tpl',
      1 => 1538623843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bb589ded0f956_94971532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Administrador</h2>
        <h3>Iniciar Sesion</h3>
      </div>
      <div class="informaciongeneral encuesta mb-3">
        <form method="post" action="verificarLogin" target="_self">
          <div class="form-group">
            <label for="usuarioId">Usuario</label>
            <input type="input" class="form-control respuestas" id="usuarioId" value="" placeholder="Usuario" name="usuarioId">
          </div>
          <div class="form-group">
            <label for="passwordId">Password</label>
            <input type="password" class="form-control respuestas" id="passwordId" placeholder="Password" name="passwordId">
          </div>
          <div class="">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          </div>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Login</button>
          </div>
        </form>
        <form method="post" action="register" target="_self">
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Register</button>
          </div>
        </form>
      </div>
    </article>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
