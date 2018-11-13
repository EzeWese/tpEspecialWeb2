<?php

require_once "Api.php";
require_once "../php/model/ProductosModel.php";

class ApiController extends Api{
  private $model;

  function __construct(){

    parent::__construct();
    $this->model = new ProductosModel();
  }

  function getComentarios($param = null){

    if(isset($param)){
        $id_producto = $param[0];
        $arreglo = $this->model->getComentario($id_producto);
        $data = $arreglo;

    }else{
      $data = $this->model->getComentarios();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function BorrarComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $response =  $this->model->BorrarComentario($id_comentario);
        if($response == false){
          return $this->json_response($response, 300);
        }

        return $this->json_response($response, 200);
    }else{
      return  $this->json_response("No comment specified", 300);
    }
  }

  function InsertComentario(){

    $objetoJson = $this->getJSONData();
    if (isset($objetoJson)) {
      $response = $this->model->InsertComentario($objetoJson->IdProducto, $objetoJson->Comentario, $objetoJson->Puntaje);
      return $this->json_response($response, 200);
    }
    else {
      return $this->json_response("No Comment specified", 300);
    }

  }

}
 ?>
