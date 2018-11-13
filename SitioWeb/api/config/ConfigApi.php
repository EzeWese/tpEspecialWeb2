<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ApiController#getComentarios',
      'comentario#POST'=> 'ApiController#InsertComentario'
    ];

}

 ?>
