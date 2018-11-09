{include file="php/templates/header.tpl"}
<div class="row justify-content-center">
  <article class="principal col-12 col-md-10">
    <div class="justify-content-center informaciongeneral mt-3">
      <h2>Cargar Producto</h2>
    </div>
    <div class="informaciongeneral encuesta">
      <form method="post" action="agregar" enctype="multipart/form-data" target="_self">
        <div class="form-group">
          <label for="nombreProducto">Nombre de Producto*</label>
          <input type="text" class="form-control respuestas" id="nombreProducto" value="" placeholder="" name="nombreProducto" required>
        </div>
        <div class="form-group">
          <label for="descripcion">Descripcion*</label>
          <textarea class="form-control respuestas" id="descripcion" placeholder="" name="descripcion" required></textarea>
        </div>
        <div class="form-group">
          <label for="categoria">Categoria*</label>
          <select class="form-control respuestas" id="categoria" placeholder="" name="IdCategoria">

            {foreach from=$Categorias item=categoria}

            <option value="{$categoria['id_categoria']}">{$categoria['nombre']}</option>

            {/foreach}

          </select>
        </div>
        <div class="form-group">
          <label for="precioP">Precio*</label>
          <input type="text" class="form-control respuestas" id="precioP" placeholder="" name="precio" required>
        </div>
        <div class="form-group">
          <label for="imagenes[]">Imágenes</label>
          <input type="file" class="form-control-file respuestas" id="imagenes[]" placeholder="" name="imagenes[]" multiple>
        </div>
        <div class="botonesForm">
          <button type="submit" class="btn btn-lg btn-enviar">Cargar nuevo producto</button>
        </div>
      </form>
      <div class="mt-3">
        <h2>Crear nueva Categoria</h2>


        <form action="nuevaCategoria" method="post" target="_self">
          <div class="form-group">
            <label for="nuevaCategoria">Nombre*</label>
            <input id="nuevaCategoria" type="text" name="nuevaCategoria" value="" required>
          </div>
          <div class="form-group">
            <label for="descripcionNuevaCategoria">Descripcion*</label>
            <textarea class="form-control respuestas" id="descripcionNuevaCategoria" placeholder="" name="descripcionNuevaCategoria" required></textarea>
          </div>
          <div class="botonesForm mt-3">
            <button type="submit" class="btn btn-lg btn-enviar">Nueva Categoria</button>
          </div>
        </form>
      </div>

    </div>
    <div class="informaciongeneral row test mt-3 mb-3">
      <div class="col-6">
        <h2>Productos</h2>
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
              <td><a type="button"class="btn btn-enviar" href="borrar/{$producto['id_producto']}" target="_self">BORRAR</a></td>
              <td><a type="button"class="btn btn-enviar" href="editar/{$producto['id_producto']}" target="_self">EDITAR</a></td>
            </tr>

            {/foreach}


          </tbody>
        </table>
      </div>
    </div>
    <div class="col-12">
      <table class="table mb-3 mt-2">
        <thead>
          <tr>
            <th scope="col">Categorias</th>
            <th scope="col">Borrar</th>
            <th scope="col">Editar</th>
        <tbody class="tabla-opiniones">
          {foreach from=$Categorias item=categoria}
          <tr class="btn-centrado">
            <td>{$categoria['nombre']}</td>
            <td><a type="button"class="btn btn-enviar" href="borrarCategoria/{$categoria['id_categoria']}" target="_self">Borrar Categoria</a></td>
            <td><a type="button"class="btn btn-enviar " href="editarCategoria/{$categoria['id_categoria']}" target="_self">Editar Categoria</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>

    </div>
    <form action="post" method="logout" target="_self">
      <div class="botonesForm mt-3">
        <button type="submit" class="btn btn-lg btn-enviar">Cerrar sesion</button>
      </div>
    </form>
    <form method="post" action="register" target="_self">
      <div class="botonesForm mt-3">
        <button type="submit" class="btn btn-lg btn-enviar">Registrar nuevo usuario</button>
      </div>
    </form>
  </article>
</div>
{include file="php/templates/footer.tpl"}
