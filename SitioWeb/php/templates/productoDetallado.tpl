{include file="php/templates/header.tpl"}
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Producto</h2>
    </div>
    <div class="justify-content-center informaciongeneral encuesta">
      <form method="post" action="{$home}/productos" target="_self">
        <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="{$Producto['id_producto']}" required>
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="{$Producto['nombre']}" placeholder="" name="nombreProducto" disabled>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" disabled>{$Producto['descripcion']}</textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <input type="text" class="form-control respuestas" id="Categoria" value="{$Producto['categoria']}" name="IdCategoria" disabled>
        </div>
        <div class="form-group">
          <label for="precioP">Precio</label>
          <input type="text" class="form-control respuestas" id="precioP" value="{$Producto['precio']}" placeholder="" name="precio" disabled>
        </div>

        <div class="botonesForm mt-3">
          <button type="submit" class="btn btn-lg btn-enviar">Volver</button>
        </div>
      </form>
    </div>
  </article>
</div>
{include file="php/templates/footer.tpl"}
