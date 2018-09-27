<?php

  class ConfigApp
  {

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'ProductosController#Home',
      'home'=> 'ProductosController#Home',
      'historia'=> 'ProductosController#Historia',
      'mundo'=> 'ProductosController#Mundo',
      'productos'=> 'ProductosController#Productos',
      'borrar'=> 'ProductosController#BorrarProducto'
    ];



  }



?>
