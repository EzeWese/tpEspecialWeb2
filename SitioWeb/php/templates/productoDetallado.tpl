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
        <div class="justify-content-center informaciongeneral mt-3 mb-3">
          <h3>Imágenes</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            {foreach from=$Imagenes item=imagen}
              <div class="carousel-item active">
                <img class="d-block w-100" src="php/{$imagen['url']}" alt="">
              </div>
            {/foreach}
          </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

        <h3>Comentarios</h3>
        <div id="comentarios-container" class="mt-3">

        </div>



        <div class="botonesForm mt-3 mb-3">
          <button type="submit" class="btn btn-lg btn-enviar">Volver</button>
        </div>
      </form>
    </div>
  </article>
</div>
<script src="js/main.js"></script>
<script src="js/handlebars-v4.0.12.js"></script>
{include file="php/templates/footer.tpl"}
