{include file="php/templates/header.tpl"}
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Editar Categoria</h2>
      </div>
      <div class="justify-content-center informaciongeneral encuesta">
        <form method="post" action="{$home}/guardarCategoria" target="_self">
          <input type="hidden" class="form-control" id="IdCategoria" name="IdCategoria" value="{$Categoria['id_categoria']}" required>
          <div class="form-group">
            <label for="nombreCategoria">Nombre de Categoria</label>
            <input type="text" class="form-control respuestas" id="nombreCategoria" value="{$Categoria['nombre']}" placeholder="" name="nombreCategoria" required>
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion"  placeholder="" name="descripcion" required>{$Categoria['descripcion']}</textarea>
          </div>

          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
          </div>
        </form>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
