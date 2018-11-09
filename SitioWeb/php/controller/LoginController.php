<?php

require_once  "php/view/LoginView.php";
require_once  "php/model/UsuarioModel.php";

class LoginController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
  }

  function login(){
    $this->view->mostrarLogin();
  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function register(){
    $this->view->mostrarRegister();
  }

  function verificarLogin(){
      $usuario = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($usuario); //ojo devuelve arreglo de una sola posicion, ver en UsuarioModel

      if (isset($dbUser[0])) {

        if($dbUser[0]["admin"] == 1){
              if (password_verify($pass, $dbUser[0]["pass"])){
                  //mostrar lista de productos
                  session_start();
                  $_SESSION["User"] = $usuario;
                  header(ADMIN);
              }
              else{
                $this->view->mostrarLogin("Contraseña incorrecta");
              }
        }
        else{
            $this->view->mostrarLogin("No eres administrador");
        }
      }
      else {
        $this->view->mostrarLogin("No existe el usuario");
      }

  }

  function verificarRegister(){
    if(!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $usuario = $_POST["usuarioId"];
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($usuario);

      if(!isset($dbUser[0])){
        $this->model->InsertarUsuario($usuario,$pass);
        $this->view->mostrarLogin("Inicie Sesion");
      }
      else{
        $this->view->mostrarRegister("Usuario Existente");
      }
    }
    else {
      $this->view->mostrarRegister("Complete todos los campos");
    }
  }

}
 ?>
