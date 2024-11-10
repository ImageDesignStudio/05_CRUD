<?php

    spl_autoload_register(function($clase){

        $archivo= __DIR__."/".$clase.".php"; //Rutas donde estan las clases
        $archivo=str_replace("\\","/",$archivo);

        if(is_file($archivo)){
            require_once $archivo;
        } 
    });