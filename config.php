<?php
    require "environment.php";
    global $config;
    $config = array();
    if(ENVIRONMENT == "development"){
        define("BASE_URL", "http://amintoo_completo_do_projeto");//mudar url aqui
        $config["dbname"] = "flexliper"        
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }
    else {
        define("BASE_URL", "http://amintoo_completo_do_projeto");//mudar url aqui
        $config["dbname"] = "flexliper";
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>
