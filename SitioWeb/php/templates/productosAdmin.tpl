{include file="php/templates/header.tpl"}
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center informaciongeneral mt-3">
        <h2>Cargar Producto</h2>
      </div>
      <div class="informaciongeneral encuesta">
        <form method="post" action="agregar" target="_self">
          <div class="form-group">
            <label for="nombreProducto">Nombre de Producto</label>
            <input type="text" class="form-control respuestas" id="nombreProducto" value="" placeholder="" name="nombreProducto">
          </div>
          <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion"></textarea>
          </div>
          <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-control respuestas" id="categoria" placeholder="" name="IdCategoria">

              {foreach from=$Categorias item=categoria}

                <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>

              {/foreach}

            </select>
          </div>
          <div class="form-group">
            <label for="precioP">Precio</label>
            <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio">
          </div>
          <div class="">
            {$message}
          </div>
          <div class="botonesForm">
            <button type="submit" class="btn btn-lg btn-enviar">Cargar</button>
          </div>
        </form>
        <form action="post" method="logout" target="_self">
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Logout</button>
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
                  <td><a href="borrar/{$producto['id_producto']}" target="_self">BORRAR</a></td>
                  <td><a href="editar/{$producto['id_producto']}" target="_self">EDITAR</a></td>
                </tr>

              {/foreach}


          </tbody>
        </table>
        </div>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
