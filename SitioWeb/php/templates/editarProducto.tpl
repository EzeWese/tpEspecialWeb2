{include file="php/templates/header.tpl"}
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3 mb-3">
      <h2>Editar Producto</h2>
    </div>
    <div class="justify-content-center informaciongeneral encuesta">
      <form method="post" action="{$home}/guardar" enctype="multipart/form-data" target="_self">
        <input type="hidden" class="form-control" id="IdProducto" name="IdProducto" value="{$Producto['id_producto']}" required>
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="{$Producto['nombre']}" placeholder="" name="nombreProducto" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" required>{$Producto['descripcion']}</textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select class="form-control respuestas" id="categoria" name="IdCategoria" required>
            <option value="{$Producto['id_categoria']}">{$Producto['categoria']}</option>
            {foreach from=$Categorias item=categoria}

            <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>

            {/foreach}

          </select>
        </div>
        <div class="form-group">
          <label for="precioP">Precio</label>
          <input type="text" class="form-control respuestas" id="precioP" value="{$Producto['precio']}" placeholder="" name="precio" required>
        </div>
        <div class="form-group">
          <label for="imagenes[]">Imágenes</label>
          <input type="file" class="form-control-file respuestas" id="imagenes[]" placeholder="" name="imagenes[]" multiple>
        </div>
        <div class="botonesForm mt-3 mb-3">
          <button type="submit" class="btn btn-lg btn-enviar">Guardar</button>
        </div>
      </form>
      <div class="justify-content-center informaciongeneral mt-3 mb-3">
        <h3>Imágenes</h3>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="galeriaporelmundo col-8 mb-4">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

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
      <div class="mb-3 imagenProducto">
        {foreach from=$Imagenes item=imagen}
        <form class="" action="{$home}/borrarImagen" method="post" target="_self">
          <div class="input-group">
            <input type="text" value="{$imagen['id_imagen']}" name="IdImagen" id="IdImagen" hidden>
            <input type="text" value="{$imagen['id_producto']}" name="IdImagenProducto" id="IdImagenProducto" hidden>
            <input type="text" class="form-control" placeholder="{$imagen['url']}" aria-label="{$imagen['url']}" aria-describedby="basic-addon2" disabled>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit">Borrar</button>
            </div>
          </div>
        </form>
        {/foreach}
      </div>
    </div>

    <div class="informaciongeneral encuesta row mt-3 mb-3">
      <div class="ml-4">
        <h2>Comentarios</h2>
      </div>
      <div class="puntajeMargen">
        <h2>Puntaje</h2>
      </div>
      <div class="botonesForm ml-2">
        <button value="asc" type="submit" class="btn btn-lg btn-Ascendente">Ascendente</button>
      </div>
      <div class="botonesForm ml-2">
        <button value="desc" type="submit" class="btn btn-lg btn-Descendente">Descendente</button>
      </div>
    </div>

    <div id="comentarios-container" class="mt-3 mb-3">

    </div>

    <div class="mt-3">
      <h3>Nuevo Comentario</h3>
      <div class="informaciongeneral encuesta mt-3 mb-3">
        <form method="" action="" target="_self">
          <div class="form-group">
            <textarea name="comentario" class="form-control comentario" id="comentario" placeholder="Nuevo Comentario" name="comentario" required></textarea>
          </div>
          <div class="form-group">
            <label for="puntaje">Puntaje</label>
            <input type="number" min="1" max="5" class="form-control comentario" id="puntaje" value="" placeholder="Puntaje" name="puntaje" required>
          </div>
        </form>
        <div class="botonesForm mt-3">
          <button type="submit" class="btn btn-lg btn-enviarComentario">Comentar</button>
        </div>
      </div>

    </div>

    <div class="informaciongeneral encuesta mt-3 mb-3">
      <form method="post" action="{$home}/admin" target="_self">
        <div class="botonesForm mt-3 ">
          <button type="submit" class="btn btn-lg btn-enviar">Volver</button>
        </div>
      </form>
    </div>

  </article>
</div>

<footer class="container-fluid">
  <p>Página creada por Ezequiel Wesenack y Patricio Prado para el trabajo especial de la cátedra de web2 de la carrera de
    Tudai 2018.</p>
</footer>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/handlebars-v4.0.12.js"></script>
<script src="js/mainAdmin.js"></script>
</body>

</html>
