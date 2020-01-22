<?php
    require "config.php";//tal vez precise mudar essa linha para require __DIR__.'config.php'
    spl_autoload_register(function ($class){
        //if(strpos($class, "Controller") > -1) {
            if(file_exists("controllers/".$class.".php")){
                require_once 'controllers/'.$class.'.php';
            }
       // }
        else if(file_exists("models/".$class.".php")){
            require_once 'models/'.$class.'.php';
        }
        else {
            require_once 'core/'.$class.'.php';
        }
    });
    $core = new Core();
    $core->run();
?>  
//verifica se da centro essas mudanças antes de aceitar!
