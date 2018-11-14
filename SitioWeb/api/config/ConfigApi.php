<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ApiControllerSinSesion#getComentarios',
      'comentario#POST'=> 'ApiController#InsertComentario',
      'comentario#DELETE'=> 'ApiController#BorrarComentario',

    ];

}

 ?>
