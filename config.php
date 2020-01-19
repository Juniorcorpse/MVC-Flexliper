<?php
    require "environment.php";
    global $config;
    $config = array();
    if(ENVIRONMENT == "development"){
        $config["dbname"] = "flexliper";
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }
    else {
        $config["dbname"] = "flexliper";
        $config["dbuser"] = "root";
        $config["dbpass"] = "";
        $config["host"] = "127.0.0.1";
    }
?>
