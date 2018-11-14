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

        if(password_verify($pass, $dbUser[0]["pass"])){
              if ($dbUser[0]["admin"] == 1){
                  session_start();
                  $_SESSION["User"] = $usuario;
                  $_SESSION["UserId"] = $dbUser[0]["id_usuario"];
                  header(ADMIN);
              }
              else{
                session_start();
                $_SESSION["User"] = $usuario;
                $_SESSION["UserId"] = $dbUser[0]["id_usuario"];
                header(USUARIO);
              }
        }
        else{
            $this->view->mostrarLogin("Contraseña Incorrecta");
        }
      }
      else {
        $this->view->mostrarLogin("No existe el usuario");
      }

  }

  function verificarRegister(){
    if(!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $usuario = strtolower($_POST["usuarioId"]);
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($usuario);

      if(!isset($dbUser[0])){
        $this->model->InsertarUsuario($usuario,$pass);
        $this->verificarLogin();
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
