{include file="php/templates/header.tpl"}
<div class="row justify-content-center margenPagina">
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
      </form>
      <div class="justify-content-center informaciongeneral mt-3 mb-3">
        <h3>Imágenes</h3>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="galeriaporelmundo col-8 mb-4">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >

            <div class="carousel-inner ">
              <div class="carousel-item active imgporelmundo">
                <img class="d-block w-100" src="imagenes/mate.png" alt="FOTOS DEL PRODUCTO">
              </div>
              {foreach from=$Imagenes item=imagen}
              <div class="carousel-item  imgporelmundo">
                <img class="d-block w-100" src="{$imagen['url']}" alt="">
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
        </div>
      </div>

      <h3>Comentarios</h3>

      <div id="comentarios-container" class="mt-3">

      </div>
      <div class="informaciongeneral encuesta mt-3 mb-3">
        <form method="post" action="{$home}/productos" target="_self">
          <div class="botonesForm mt-3 ">
            <button type="submit" class="btn btn-lg btn-enviar">Volver</button>
          </div>
        </form>
      </div>

    </div>
  </article>
</div>
</div>
<footer class="container-fluid">
  <p>Página creada por Ezequiel Wesenack y Patricio Prado para el trabajo especial de la cátedra de web2 de la carrera de
    Tudai 2018.</p>
</footer>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/handlebars-v4.0.12.js"></script>
<script src="js/main.js"></script>
</body>

</html>
