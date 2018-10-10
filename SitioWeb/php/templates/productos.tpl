{include file="php/templates/header.tpl"}
  <div class="row justify-content-center">
    <article class="principal col-12 col-md-10">
      <div class="justify-content-center mt-3">
        <h1 class="text-center">Nuestros Productos</h1>
        <h2 class="text-center subtitulo mt-4">"Cada quien con lo suyo..."</h2>
      </div>
      <div class="informaciongeneral row test mt-5 mb-3">
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
            </tr>
          </thead>
          <tbody class="tabla-opiniones">


              {foreach from=$Productos item=producto}

                <tr class="btn-centrado">
                  <td>{$producto['nombre']}</td>
                  <td>{$producto['descripcion']}</td>
                  <td>{$producto['categoria']}</td>
                  <td>{$producto['precio']}</td>
                </tr>

              {/foreach}


          </tbody>
        </table>
        </div>
      </div>
      <div class="informaciongeneral mt-3">
        <h2>Administrador</h2>
      </div>
      <div class="informaciongeneral encuesta row mb-3">
          <form method="post" action="login" target="_self">
            <div class="botonesForm ml-3">
              <button type="submit" class="btn btn-lg btn-enviar">Login</button>
            </div>
          </form>
      </div>
    </article>
  </div>
{include file="php/templates/footer.tpl"}
