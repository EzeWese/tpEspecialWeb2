<?php

class LoginView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($message = ''){
    $this->Smarty->assign('message',$message);
    $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('php/templates/login.tpl');
  }

  function mostrarRegister($message = ''){
    $this->Smarty->assign('message',$message);
    $this->Smarty->assign('home','http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('php/templates/register.tpl');
  }


}

 ?>
