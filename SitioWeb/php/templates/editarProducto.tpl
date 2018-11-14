{include file="php/templates/header.tpl"}
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
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
      <div class="mb-3">
        <ul class="list-group">
          {foreach from=$Imagenes item=imagen}
          <li class="list-group-item d-flex justify-content-between align-items-center">{$imagen['url']}  <span class="badge badge-primary badge-pill"><a href="borrarImagen/{$imagen['id_imagen']}">Borrar</a></span></li>
          {/foreach}
        </ul>
      </div>
    </div>
    <h3>Comentarios</h3>
    <div id="comentarios-container" class="mt-3 mb-3">

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
