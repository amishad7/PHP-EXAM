<?php


    include "config/config.php";

    $config = new Config();

    if($config->connectDB()){

        echo "DATABASE CONNECTION DONE!!";
        
    }else{

        echo "DATABASE CONNECTION FAILED!!";
    }
    

?>