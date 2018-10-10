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

      $sentencia = $this->db->prepare("select * from producto");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCategorias(){

      $sentencia = $this->db->prepare("SELECT * FROM categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    private function getCategoria($IdCategoria){
      $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria=? limit 1");
      $sentencia->execute(array($IdCategoria));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProducto($IdProducto){
      $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_producto=?");
      $sentencia->execute(array($IdProducto));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function InsertarProducto($IdCategoria,$nombre,$precio,$descripcion){

      $arrcategoria = $this->getCategoria($IdCategoria);
      $categoria = $arrcategoria[0]["nombre"];

      $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria, nombre, categoria, precio, descripcion) VALUES(?,?,?,?,?)");
      $sentencia->execute(array($IdCategoria,$nombre,$categoria,$precio,$descripcion));
    }

    function BorrarProducto($idProducto){

      $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
      $sentencia->execute(array($idProducto));
    }

    function EditarProducto($IdCategoria,$nombre,$precio,$descripcion,$IdProducto){
      $arrcategoria = $this->getCategoria($IdCategoria);
      $categoria = $arrcategoria[0]["nombre"];

      $sentencia = $this->db->prepare("UPDATE producto SET id_categoria = ?, nombre = ?, categoria = ?, precio = ?, descripcion = ? WHERE id_producto=?");
      $sentencia->execute(array($IdCategoria,$nombre,$categoria,$precio,$descripcion,$IdProducto));

    }

    function CrearCategoria($nombreCategoria,$descripcionCategoria){
      $sentencia = $this->db->prepare("INSERT INTO categoria(nombre,descripcion) VALUES(?,?)");
      $sentencia->execute(array($nombreCategoria,$descripcionCategoria));
    }


//UPDATE `producto` SET `id_producto`=[value-1],`id_categoria`=[value-2],`nombre`=[value-3],`categoria`=[value-4],`precio`=[value-5],`descripcion`=[value-6] WHERE 1


  }
 ?>
