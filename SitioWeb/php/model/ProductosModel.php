<?php

  class ProductosModel
  {
    private $db;

    function __construct()
    {
      $this->db = $this->Connect();
    }

    private function Connect(){

      return new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function getProductos(){

      $sentencia = $this->db->prepare("SELECT * FROM producto ORDER BY categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getCategorias(){

      $sentencia = $this->db->prepare("SELECT * FROM categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

     function getCategoria($IdCategoria){
      $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria=? limit 1");
      $sentencia->execute(array($IdCategoria));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProducto($IdProducto){
      $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_producto=?");
      $sentencia->execute(array($IdProducto));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }
    function getProductoPorCategoria($IdCategoria){
      $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria=?");
      $sentencia->execute(array($IdCategoria));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getImagenesPorProducto($IdProducto){
      $sentencia = $this->db->prepare("SELECT * FROM imagen WHERE id_producto=?");
      $sentencia->execute(array($IdProducto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarProducto($IdCategoria,$nombre,$precio,$descripcion,$tempPaths){
      $arrcategoria = $this->getCategoria($IdCategoria);
      $categoria = $arrcategoria[0]["nombre"];

      $sentencia = $this->db->prepare("INSERT INTO producto(id_categoria, nombre, categoria, precio, descripcion) VALUES(?,?,?,?,?)");
      $sentencia->execute(array($IdCategoria,$nombre,$categoria,$precio,$descripcion));
      $lastId = $this->db->lastInsertId();
      $this->subirImagenes($tempPaths, $lastId);

    }

    private function subirImagenes($tempPaths, $idProducto){
      foreach ($tempPaths as $path) {
        $destino_final = 'images/' . uniqid() . '.jpg';
        move_uploaded_file($path, $destino_final);
        $sentencia = $this->db->prepare("INSERT INTO imagen(id_producto, url) VALUES(?,?)");
        $sentencia->execute(array($idProducto,$destino_final));
      }
   }

    function BorrarProducto($idProducto){

      $sentencia = $this->db->prepare("DELETE FROM producto WHERE id_producto=?");
      $sentencia->execute(array($idProducto));
    }

    function BorrarCategoria($IdCategoria){

      $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
      $sentencia->execute(array($IdCategoria));
    }


    function EditarProducto($IdCategoria,$nombre,$precio,$descripcion,$IdProducto,$tempPaths){
      $arrcategoria = $this->getCategoria($IdCategoria);
      $categoria = $arrcategoria[0]["nombre"];

      $sentencia = $this->db->prepare("UPDATE producto SET id_categoria = ?, nombre = ?, categoria = ?, precio = ?, descripcion = ? WHERE id_producto=?");
      $sentencia->execute(array($IdCategoria,$nombre,$categoria,$precio,$descripcion,$IdProducto));

      $this->subirImagenes($tempPaths, $IdProducto);

    }

    function EditarCategoria($IdCategoria,$nombre,$descripcion){
      $sentencia = $this->db->prepare("UPDATE categoria SET nombre = ?, descripcion = ? WHERE id_categoria=?");
      $sentencia->execute(array($nombre,$descripcion,$IdCategoria));

    }

    function CrearCategoria($nombreCategoria,$descripcionCategoria){
      $sentencia = $this->db->prepare("INSERT INTO categoria(nombre,descripcion) VALUES(?,?)");
      $sentencia->execute(array($nombreCategoria,$descripcionCategoria));
    }

    function getComentarios(){
      $sentencia = $this->db->prepare("SELECT * FROM comentario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getComentario($IdComentario){
      $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
      $sentencia->execute($IdComentario);
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function BorrarComentario($IdComentario){

      $comentario = $this->getComentario($IdComentario);
      if (isset($comentario)) {
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($IdComentario));
        return $comentario;
      }

    }

    function InsertComentario($IdProducto,$Comentario,$Puntaje){
      session_start();
      $sentencia = $this->db->prepare("INSERT INTO comentario(id_producto,id_usuario,nombre,comentario,puntaje) VALUES(?,?,?,?,?)");
      $sentencia->execute(array($IdProducto,$_SESSION["UserId"],$_SESSION["User"],$Comentario,$Puntaje));
      $lastId = $this->db->lastInsertId();
      $comentario = $this->getComentario($lastId);
      return $comentario[0];
    }

  }
 ?>
