<?php
  require_once 'index.php';

function Connect(){

  return new PDO('mysql:host=localhost;'
  .'dbname=db_productos;charset=utf8'
  , 'root', '');
}

function getProductos() {

  $db = Connect();
  $sentencia = $db->prepare( "select * from producto");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function InsertProducto() {
  if((isset($_POST["nombreProducto"])) && (isset($_POST["descripcion"])) && (isset($_POST["categoria"])) && (isset($_POST["precio"]))){
      $nombre = $_POST["nombreProducto"];
      $descripcion = $_POST["descripcion"];
      $categoria = $_POST["categoria"];
      $precio = $_POST["precio"];
  }
  else {
    Productos();
  }


  $db = Connect();
  $sentencia = $db->prepare("INSERT INTO producto(nombre, descripcion, categoria, precio) VALUES(?,?,?,?)");
  $sentencia->execute(array($nombre,$descripcion,$categoria,$precio));
  //header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

}

?>
