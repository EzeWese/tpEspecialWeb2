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

  function ProductosAdmin(){

    $Productos = $this->model->getProductos();
    $Categorias = $this->model->getCategorias();
    $this->view->MostrarProductosAdmin($Productos,$Categorias);
  }

  function ProductosUsuario(){

    $Productos = $this->model->getProductos();
    $Categorias = $this->model->getCategorias();
    $this->view->MostrarProductosUsuario($Productos,$Categorias);
  }

  function InsertProducto(){
      $nombre = $_POST["nombreProducto"];
      $descripcion = $_POST["descripcion"];
      $IdCategoria = $_POST["IdCategoria"];
      $precio = $_POST["precio"];

      $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];

      $this->model->InsertarProducto($IdCategoria,$nombre,$precio,$descripcion,$rutaTempImagenes);
      header(ADMIN);

  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(ADMIN);
  }

  function EditarProducto($param){
    $IdProducto = $param[0];
    $Categorias = $this->model->getCategorias();
    $Producto = $this->model->getProducto($IdProducto);
    $Imagenes = $this->model->getImagenesPorProducto($IdProducto);
    $this->view->MostrarEditarProducto($Producto,$Categorias,$Imagenes);

  }

  function mostrarDetalleUser($param){
    $IdProducto = $param[0];
    $Producto = $this->model->getProducto($IdProducto);
    $Imagenes = $this->model->getImagenesPorProducto($IdProducto);
    $this->view->mostrarDetalleUser($Producto, $Imagenes);
  }

  function EditarCategoria($param){
    $IdCategoria = $param[0];
    $Categoria = $this->model->getCategoria($IdCategoria);
    $this->view->MostrarEditarCategoria($Categoria[0]);


  }
  function BorrarCategoria($param){
    $this->model->BorrarCategoria($param[0]);
    header(ADMIN);
  }


  function GuardarEditarProducto(){
    $nombre = $_POST["nombreProducto"];
    $descripcion = $_POST["descripcion"];
    $IdCategoria = $_POST["IdCategoria"];
    $precio = $_POST["precio"];
    $IdProducto = $_POST["IdProducto"];

    $rutaTempImagenes = $_FILES['imagenes']['tmp_name'];

    $this->model->EditarProducto($IdCategoria,$nombre,$precio,$descripcion,$IdProducto,$rutaTempImagenes);
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
    $nombreCategoria = $_POST["nuevaCategoria"];
    $descripcionCategoria = $_POST["descripcionNuevaCategoria"];
    $this->model->CrearCategoria($nombreCategoria,$descripcionCategoria);
    header(ADMIN);
  }
  function borrarImagen(){
    $idImagen = $_POST["IdImagen"];
    $IdProducto = $_POST["IdImagenProducto"];
    $this->model->borrarImagen($idImagen);
    header(EDITAR . '/' . $IdProducto);
  }

}



 ?>
