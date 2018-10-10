<?php

require_once  "php/view/ProductosView.php";
require_once  "php/model/ProductosModel.php";
require_once  "SecuredController.php";

class ProductosController extends SecuredController
{
  private $view;
  private $model;

  function __construct()
  {
    parent::__construct();

    $this->view = new ProductosView();
    $this->model = new ProductosModel();
  }

  function ProductosAdmin($message = ''){

    $Productos = $this->model->getProductos();
    $Categorias = $this->model->getCategorias();
    $this->view->MostrarProductosAdmin($Productos,$Categorias,$message);
  }

  function InsertProducto(){
      $nombre = $_POST["nombreProducto"];
      $descripcion = $_POST["descripcion"];
      $IdCategoria = $_POST["IdCategoria"];
      $precio = $_POST["precio"];
      if(isset($nombre) && isset($descripcion) && isset($IdCategoria) && isset($precio)){
        $this->model->InsertarProducto($IdCategoria,$nombre,$precio,$descripcion);
        header(ADMIN);
      }
      else{
      $this->ProductosAdmin("Completar todos los campos");
      }
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(ADMIN);
  }

  function EditarProducto($param){
    $IdProducto = $param[0];
    $Categorias = $this->model->getCategorias();
    $Producto = $this->model->getProducto($IdProducto);
    $this->view->MostrarEditarProducto($Producto,$Categorias);


  }
  function EditarCategoria($param){
    $IdCategoria = $param[0];
    $Categoria = $this->model->getCategoria($IdCategoria);
    $this->view->MostrarEditarCategoria($Categoria[0]);


  }

  function GuardarEditarProducto(){
    $nombre = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcion"];
    $IdCategoria = $_POST["IdCategoria"];
    $precio = $_POST["precio"];
    $IdProducto = $_POST["IdProducto"];
    $this->model->EditarProducto($IdCategoria,$nombre,$precio,$descripcion,$IdProducto);
    header(ADMIN);
  }
  function GuardarEditarCategoria(){
    $nombre = $_POST["nombreCategoria"];
    $descripcion = $_POST["descripcion"];
    $IdCategoria = $_POST["IdCategoria"];
    $this->model->EditarCategoria($IdCategoria,$nombre,$descripcion);
    header(ADMIN);
  }

  function InsertCategoria(){
    $nombreCategoria=$_POST["nuevaCategoria"];
    $descripcionCategoria=$_POST["descripcionNuevaCategoria"];
    $this->model->CrearCategoria($nombreCategoria,$descripcionCategoria);
    header(ADMIN);
  }

}



 ?>
