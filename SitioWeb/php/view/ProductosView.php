<?php

  class ProductosView
    {
    private $Smarty;

    function __construct(){
      $this->Smarty = new Smarty();
    }

    function MostrarProductosAdmin($Productos,$Categorias,$Usuarios) {
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      $this->Smarty->assign('Categorias',$Categorias);
      $this->Smarty->assign('User',$_SESSION["User"]);
      $this->Smarty->assign('UserId',$_SESSION["UserId"]);
      $this->Smarty->assign('Usuarios',$Usuarios);
      //$smarty->debugging = true;
      $this->Smarty->display('php/templates/productosAdmin.tpl');
    }

    function MostrarProductosUsuario($Productos,$Categorias) {
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      //$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      $this->Smarty->assign('Categorias',$Categorias);
      $this->Smarty->assign('User',$_SESSION["User"]);
      //$smarty->debugging = true;
      $this->Smarty->display('php/templates/productosUsuario.tpl');
    }

    function mostrarDetalleUser($Producto, $Imagenes){
      $this->Smarty->assign('Producto',$Producto);
      $this->Smarty->assign('Imagenes',$Imagenes);
      $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/productoDetalladoUsuario.tpl');

    }

    function MostrarEditarProducto($Producto,$Categorias,$Imagenes) {

      $this->Smarty->assign('Categorias',$Categorias);
      $this->Smarty->assign('Producto',$Producto);
      $this->Smarty->assign('Imagenes',$Imagenes);
      $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/editarProducto.tpl');
    }
    function MostrarEditarCategoria($Categoria) {

      $this->Smarty->assign('Categoria',$Categoria);
      $this->Smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->display('php/templates/editarCategoria.tpl');
    }



  }

?>
