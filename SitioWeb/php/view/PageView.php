<?php
require('php/libs/Smarty.class.php');

  class PageView
    {
    private $Smarty;

    function __construct(){
      $this->Smarty = new Smarty();
    }

    function MostrarHome(){
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/home.tpl');
    }

    function MostrarHistoria(){
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/historia.tpl');
    }

    function MostrarMateWorld(){
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/mateWorld.tpl');
    }

    function MostrarProductos($Productos,$Categorias) {
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      $this->Smarty->assign('Categorias',$Categorias);
      //$smarty->debugging = true;
      $this->Smarty->display('php/templates/productos.tpl');
    }

    function MostrarProductosUsuario($Productos,$Categorias) {
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      $this->Smarty->assign('Categorias',$Categorias);
      //$smarty->debugging = true;
      $this->Smarty->display('php/templates/productosUsuario.tpl');
    }

    function mostrarDetalle($Producto, $Imagenes){
      $this->Smarty->assign('Producto',$Producto);
      $this->Smarty->assign('Imagenes',$Imagenes);
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/productoDetallado.tpl');

    }

    function mostrarDetalleUser($Producto, $Imagenes){
      $this->Smarty->assign('Producto',$Producto);
      $this->Smarty->assign('Imagenes',$Imagenes);
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/productoDetalladoUsuario.tpl');

    }
  }

?>
