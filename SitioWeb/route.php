<?php

require_once "php/config/ConfigApp.php";
require_once "php/controller/ProductosController.php";
require_once "php/controller/LoginController.php";
require_once "php/controller/PageController.php";
require_once "php/controller/SecuredController.php";

#[borrar][1]
#completada/2
#agregar
function dataBase(){
try{
  $connection = new PDO('mysql:host=localhost;dbname=db_productos;charset=utf8', 'root', '');
}catch(Exception $e){
  $db = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
      $sql = file_get_contents('db_productos.sql');
      $db->exec($sql);
      }
}

dataBase();

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];

  #borrar/1/2/3/4
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

  if(isset($_GET['action'])){
    #$urlData[ACTION] = borrar
    #$urlData[PARAMS] = [1,2,3,4]

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $action = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> ProductosController [1] -> BorrarTarea
        $controller =  new $action[0](); //ejemplo new PageController
        $metodo = $action[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodo($params);
        }
        else{
            echo $controller->$metodo();
        }
    }else{
      $controller = new PageController();
      echo $controller->Home();
    }
}


?>
