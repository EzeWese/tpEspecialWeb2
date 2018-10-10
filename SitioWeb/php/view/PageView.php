<?php
require('php/libs/Smarty.class.php');

  class PageView
    {
    private $Smarty;

    function __construct(){
      $this->Smarty = new Smarty();
    }

    function MostrarHome(){

      $this->Smarty->display('php/templates/home.tpl');
    }

    function MostrarHistoria(){

      $this->Smarty->display('php/templates/historia.tpl');
    }

    function MostrarMateWorld(){

      $this->Smarty->display('php/templates/mateWorld.tpl');
    }

    function MostrarProductos($Productos) {

      //$this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->Smarty->assign('Productos',$Productos);
      //$smarty->debugging = true;
      $this->Smarty->display('php/templates/productos.tpl');
    }

  }

?>
