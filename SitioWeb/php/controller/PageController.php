<?php

require_once  "php/view/PageView.php";
require_once  "php/model/ProductosModel.php";

class PageController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new PageView();
    $this->model = new ProductosModel();
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
    $Categorias = $this->model->getCategorias();
    $this->view->MostrarProductos($Productos,$Categorias);
  }
  function mostrarDetalle($param){
    $IdProducto = $param[0];
    $Producto = $this->model->getProducto($IdProducto);
    $this->view->mostrarDetalle($Producto);
  }
}

 ?>
