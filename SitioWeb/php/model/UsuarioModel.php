<?php

class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_productos;charset=utf8'
    , 'root', '');
  }

  function getUsuarios(){

      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($nombre, $pass){

    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function getUser($usuario){
      $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE nombre=? limit 1");
      $sentencia->execute(array($usuario));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


}

 ?>
