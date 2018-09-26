<?php
require('libs/Smarty.class.php');

  class ProductosView
    {
    //private $smarty;

    /*function __construct(){
      $this->$smarty = new Smarty();
    }*/

    function MostrarHome(){
      $smarty = new Smarty();
      $this->$smarty->display('templates/home.tpl');
    }

    function MostrarHistoria(){
      $smarty = new Smarty();
      $this->$smarty->display('templates/historia.tpl');
    }

    function MostrarMateWorld(){
      $smarty = new Smarty();
      $this->$smarty->display('templates/mateWorld.tpl');
    }

    function MostrarProductos($Titulo, $Productos) {
      $smarty = new Smarty();
      $this->$smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
      $this->$smarty->assign('Productos',$Productos);
      //$smarty->debugging = true;
      $this->$smarty->display('templates/productos.tpl');
    }
  }

?>
