<?php

class SecuredController
{

  function __construct(){
    session_start();
    if(isset($_SESSION["User"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 100)) {
        header(LOGOUT); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header(LOGIN);
    }
  }

}



 ?>
