{include file="php/templates/header.tpl"}
<div class="row justify-content-center margenPagina">
  <article class="principal col-12 col-md-10">
    <h1 class="text-center mt-3 mb-4">Administrador</h1>
    <div class="informaciongeneral encuesta row mt-3 mb-4">
      <div class="ml-4">
        <h2>{$User}</h2>
      </div>
      <div class="">
        <form method="post" action="logout" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Cerrar Sesion</button>
          </div>
        </form>
      </div>
      <div class="">
        <form method="post" action="register" target="_self">
          <div class="botonesForm ml-3">
            <button type="submit" class="btn btn-lg btn-enviar">Registrar Nuevo Usuario</button>
          </div>
        </form>
      </div>
    </div>
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
      <div class="mt-5">
        <h2>Crear Nueva Categoria</h2>


        <form action="nuevaCategoria" method="post" target="_self">
          <div class="form-group mt-4">
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
    <div class="informaciongeneral row test mt-5 mb-3">
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
              <td><a type="button" class="btn btn-enviar" href="borrar/{$producto['id_producto']}" target="_self">BORRAR</a></td>
              <td><a type="button" class="btn btn-enviar" href="editar/{$producto['id_producto']}" target="_self">EDITAR</a></td>
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
        </thead>
        <tbody class="tabla-opiniones">
          {foreach from=$Categorias item=categoria}
          <tr class="btn-centrado">
            <td>{$categoria['nombre']}</td>
            <td><a type="button" class="btn btn-enviar" href="borrarCategoria/{$categoria['id_categoria']}" target="_self">Borrar Categoria</a></td>
            <td><a type="button" class="btn btn-enviar " href="editarCategoria/{$categoria['id_categoria']}" target="_self">Editar Categoria</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>


    </div>
    <div class="col-12">
      <table class="table mb-3 mt-2">
        <thead>
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Tipo de Usuario</th>
            <th scope="col">Borrar</th>
            <th scope="col">Hacer admin</th>
        </thead>
        <tbody class="tabla-opiniones">
          {foreach from=$Usuarios item=usuario}
          <tr class="btn-centrado">
            <td>{$usuario['nombre']}</td>
            <td>
              {if $usuario['admin'] eq 1}
              Admin
              {else}
              Usuario
              {/if}
            </td>
            <td>
            {if $usuario['id_usuario'] neq $UserId}
              <a type="button" class="btn btn-enviar" href="borrarUsuario/{$usuario['id_usuario']}" target="_self">Borrar Usuario</a>
            </td>
            {/if}
            <td>
              {if $usuario['admin'] eq 1}
              {else}
              <a type="button" class="btn btn-enviar " href="darPermiso/{$usuario['id_usuario']}" target="_self">Dar Permiso</a>
              {/if}
            </td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </article>
</div>
{include file="php/templates/footer.tpl"}
