<?php

require_once  "./view/ProductosView.php";
require_once  "./model/ProductosModel.php";

class ProductosController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->Titulo = "Lista de Productos";
  }

  function Home(){
    $this->view->MostrarHome();
  }

  function Historia(){
    $this->view->MostrarHistoria();
  }

  function Mundo(){
    $this->view->MostrarMateWorld();
  }

  function Productos(){

    $Productos = $this->model->getProductos();
    $this->view->MostrarProductos($this->Titulo,$Productos);
  }

  function InsertProducto(){
    $nombre = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $precio = $_POST["precio"];

    $this->model->InsertarProducto($nombre,$descripcion,$categoria,$precio);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }



  }



 ?>
