<?php

define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/admin');
class ConfigApp
  {

    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'PageController#Home',
      'home'=> 'PageController#Home',
      'historia'=> 'PageController#Historia',
      'mundo'=> 'PageController#Mundo',
      'productos'=> 'PageController#Productos',
      'borrar'=> 'ProductosController#BorrarProducto',
      'agregar'=> 'ProductosController#InsertProducto',
      'editar'=> 'ProductosController#EditarProducto',
      'guardar'=> 'ProductosController#GuardarEditarProducto',
      'login'=> 'LoginController#login',
      'logout'=> 'LoginController#logout',
      'verificarLogin'=> 'LoginController#verificarLogin',
      'admin'=> 'ProductosController#ProductosAdmin',
      'register'=> 'LoginController#register',
      'verificarRegister'=> 'LoginController#verificarRegister',
      'nuevaCategoria'=> 'ProductosController#InsertCategoria',
      'detalle'=> 'PageController#mostrarDetalle',
      'editarCategoria'=> 'ProductosController#EditarCategoria',
      'guardarCategoria'=> 'ProductosController#GuardarEditarCategoria'
    ];



  }



?>
