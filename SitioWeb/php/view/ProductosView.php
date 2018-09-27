<?php
require('libs/Smarty.class.php');

  class ProductosView
    {
    private $Smarty;

    function __construct(){
      $this->Smarty = new Smarty();
    }

    function MostrarHome(){

      $this->Smarty->display('templates/home.tpl');
    }

    function MostrarHistoria(){

      $this->Smarty->display('templates/historia.tpl');
    }

    function MostrarMateWorld(){

      $this->Smarty->display('templates/mateWorld.tpl');
    }

    function MostrarProductos($Titulo, $Productos) {

      $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      //$smarty->debugging = true;
      $this->Smarty->display('templates/productos.tpl');
    }
  }

?>
