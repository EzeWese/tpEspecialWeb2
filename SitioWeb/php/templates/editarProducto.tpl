{include file="php/templates/header.tpl"}
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Editar Producto</h2>
      </div>
      <div class="justify-content-center informaciongeneral encuesta">
        <form method="post" action="{$home}/guardar" target="_self">
          <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="{$Producto['id_producto']}">
          <div class="form-group">
            <label for="nombreProducto">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombreProducto" value="{$Producto['nombre']}" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion"  placeholder="" name="descripcion">{$Producto['descripcion']}</textarea>
          </div>
          <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control respuestas" id="categoria" name="IdCategoria">
              <option value="{$Producto['id_categoria']}">{$Producto['categoria']}</option>
              {foreach from=$Categorias item=categoria}

              <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>

              {/foreach}

            </select>
          </div>
          <div class="form-group">
            <label for="precioP">Precio</label>
            <input type="text" class="form-control respuestas" id="precioP" value="{$Producto['precio']}" placeholder="" name="precio">
          </div>
          <div class="">
            {$message}
          </div>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
          </div>
        </form>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
