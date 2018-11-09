<?php

require_once "Api.php";
require_once "././model/ProductosModel.php";

class ApiController extends Api{
  private $model;

  function __construct(){
    parent::__construct();
    $this->model = new ProductosModel();
  }

  function getComentarios($param = null){

    if(isset($param)){
        $id_tarea = $param[0];
        $arreglo = $this->model->getComentario($id_tarea);
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
        $id_tarea = $param[0];
        $r =  $this->model->BorrarComentario($id_tarea);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No comment specified", 300);
    }
  }

  function InsertComentario($param = null){

    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarComentario($objetoJson->IdProducto, $objetoJson->IdUsuario, $objetoJson->comentario, $objetoJson->puntaje);

    return $this->json_response($r, 200);
  }

}
 ?>
