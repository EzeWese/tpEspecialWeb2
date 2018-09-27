<?php

  class ProductosModel
  {
    private $db;

    function __construct()
    {
      $this->db = $this->Connect();
    }

    private function Connect(){

      return new PDO('mysql:host=localhost;'
    .'dbname=db_productos;charset=utf8'
    , 'root', '');

    }

    function getProductos(){

      $sentencia = $this->db->prepare( "select * from producto");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarProducto($nombre,$descripcion,$categoria,$precio){

    $sentencia = $this->db->prepare("INSERT INTO producto(nombre, descripcion, categoria, precio) VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre,$descripcion,$categoria,$precio));
    }

    function BorrarProducto($idProducto){

    $sentencia = $this->db->prepare( "delete from producto where id=?");
    $sentencia->execute(array($idProducto));
  }






  }
 ?>
