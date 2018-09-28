<?php
/* Smarty version 3.1.33, created on 2018-09-28 21:40:23
  from 'C:\xampp\htdocs\Proyects\Web2\tpEspecialWeb2\SitioWeb\php\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bae83a74381f4_21750813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7addafa74d8c4c306844c8d69f2c845f456432dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyects\\Web2\\tpEspecialWeb2\\SitioWeb\\php\\templates\\home.tpl',
      1 => 1538163619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:php/templates/header.tpl' => 1,
    'file:php/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5bae83a74381f4_21750813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:php/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="row justify-content-center">

      <article class="principal col-12 col-md-10 justify-content-center">

        <div class="justify-content-center mt-3">
          <h1 class="text-center">Bienvenidos</h1>
          <h2 class="text-center mt-4 subtitulo">"Lo mismo que en ranchito, en la mansion del magnate, es rey y señor el mate"</h2>
        </div>

        <div class="informaciongeneral row mt-5">
          <div class="info col-12 col-md-6">
            <h2 class="text-center">¿Qué es el mate?</h2>
            <p class="mt-4">Se llama mate la infusión de hojas de yerba mate (Ilex paraguayensis), secadas y molidas, servidos en un recipiente
              del mismo nombre. Este recipiente, el más tradicional de todos, es una especie de calabaza “Lagenaria siceraria”
              de la cuál se obtiene el porongo, calabaza de peregrino o jícaro. Este fruto, una vez cultivado y seco se utiliza
              como recipiente para tomar mate, previamente debe ser curado.</p>
          </div>
          <div class="imageninformaciongeneral col-12 col-md-6">
            <img src="imagenes/fruto.jpg" alt="" class="img-thumbnail">
          </div>
        </div>
        <div class="informaciongeneral  row mt-5">
          <div class="info col-12 col-md-6">
            <h2 class="text-center">¿Qué es la yerba mate?</h2>
            <p class="mt-4">La yerba mate (su nombre científico es Ilex Paraguariensis) es un árbol nativo de la Selva Paranaense. En estado
              silvestre, alcanza una altura de entre 12 y 16 metros. Es ampliamente cultivada comercialmente en Argentina,
              Brasil y Paraguay (en orden de producción total) desde el siglo XIX, dando lugar a una importante industria.</p>
          </div>
          <div class="imageninformaciongeneral col-12 col-md-6 ">
            <img src="imagenes/yerbamate.jpg" alt="" class="img-thumbnail">
          </div>
        </div>
        <div class="informaciongeneral row mt-5">
          <div class="buenmate col-12">
            <h2>¿Cómo armar un buen mate?</h2>
            <ol class="mt-4">
              <li>
                <p>Llene el mate a dos tercios de su capacidad. Tape la boca del mate con la palma de la mano, inviértalo y sacuda
                  varias veces dejando la yerba recostada hacia un lado.</p>
              </li>
              <li>
                <p> Vierta una pequeña cantidad de agua fría o tibia en el costado más vacío. Coloque la bombilla donde volcó el
                  agua fría y agregue agua a temperatura entre 70°C y 80°C siempre en la zona de la bombilla.</p>
              </li>
              <li>
                <p>Deguste y compruebe las cualidades de un exquisito mate.</p>
              </li>
            </ol>
          </div>
          <div class="row galeriabuenmate col-12 mt-3">
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso1.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso2.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="imagenbuenmate col-4">
              <img src="imagenes/paso2.jpg" alt="" class="img-thumbnail">
            </div>
          </div>
        </div>
      </article>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:php/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
