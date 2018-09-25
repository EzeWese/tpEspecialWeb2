<?php

//Hay que arreglar el route para que ande sin llamar a Productos() en el index.php
// y para que ande el InsertProducto(), osea para que inserte productos en la base de datos a traver del form.
//Comiteo los require para que ande la llamada de Productos() que esta en el index.php.

require_once "index.php";
require_once "historia.php";
require_once "mateWorld.php";
require_once "tabla.php";
require_once "productos.php";

if ($_GET['action'] == '') {
  Home();
}
else if($_GET['action'] == 'historia') {
  Historia();
}
else if($_GET['action'] == 'mateWorld'){
  mateWorld();
}
else{
  Productos();
}
?>
