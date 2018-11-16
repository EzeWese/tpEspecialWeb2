{include file="php/templates/header.tpl"}
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Nuevo Usuario</h2>
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
          {$message}
        </div>
        <div class="botonesForm mt-3 mb-3">
          <button type="submit" class="btn btn-lg btn-enviar">Register</button>
        </div>
      </form>
    </div>
  </article>
</div>
{include file="php/templates/footer.tpl"}
