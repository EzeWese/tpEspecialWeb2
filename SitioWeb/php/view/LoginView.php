<?php

class LoginView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($message = ''){
    $this->Smarty->assign('message',$message);
    $this->Smarty->display('php/templates/login.tpl');
  }

  function mostrarRegister($message = ''){
    $this->Smarty->assign('message',$message);
    $this->Smarty->display('php/templates/register.tpl');
  }


}

 ?>
