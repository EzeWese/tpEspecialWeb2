{include file="header.tpl"}
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center mt-3">
        <h1 class="text-center">Nuestros Productos</h1>
        <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
      </div>
      <div class="informaciongeneral mt-5">
        <h2>(Solos usuarios con contraseña cargan Productos)</h2>
      </div>
      <div class="informaciongeneral encuesta">
        <form method="post" action="agregar">
          <div class="form-group">
            <label for="nombre">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombre" value="" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcionP">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcionP" placeholder="" name="descripcion"></textarea>
          </div>
          <div class="form-group">
            <label for="categoriaProducto">Categoria</label>
            <input type="text" class="form-control respuestas" id="categoriaProducto" placeholder="" name="categoria">
          </div>
          <div class="form-group">
            <label for="precioP">Precio</label>
            <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio">
          </div>
          <div class="botonesForm">
            <button type="submit" class="btn btn-lg btn-enviar">Cargar</button>
          </div>
        </form>
        </div>
        <div class="informaciongeneral row test mt-3 mb-3">
          <div class="col-6">
            <h2>Productos</h2>
          </div>
          <div class="col-6 filtro">
            <div class="row">
              <form class="">
                <label>Filtrar por Categoria</label>
                <input class="filtrar" type="text">
              </form>
              <button class="btn-filtrar">Filtrar</button>
              <button class="btn-limpiar">Limpiar Filtros</button>
            </div>
          </div>
          <div class="table-responsive">
          <table class="table mb-3 mt-2">
            <thead>
              <tr>
              <th scope="col">Producto</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Categoria</th>
              <th scope="col">Precio</th>
              <th>Borrar</th>
              <th>Editar</th>
            </tr>
          </thead>
          <tbody class="tabla-opiniones">


              {foreach from=$Productos item=producto}

                <tr class="btn-centrado">
                  <td>{$producto['nombre']}</td>
                  <td>{$producto['descripcion']}</td>
                  <td>{$producto['categoria']}</td>
                  <td>{$producto['precio']}</td>
                  <td><a href="borrar/{$producto['id_producto']}">BORRAR</a></td>
                </tr>

              {/foreach}


          </tbody>
        </table>
        </div>
      </div>
    </article>
  </div>
{include file="footer.tpl"}
