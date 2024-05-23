<?php

 
   Header("Access-Control-Allow-Methods: POST");
   Header("Content-type: application/json");

    include "../../config/config.php";

    $config = new Config();

   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {

    $name = $_POST['name'];
  

    $res = $config->addSUB($name);

    if($res){

        $data['response'] = "Data inserted into student table";

    }else{
        $data['response'] = "Data insertion failed";

    }
   }
   else
   {
     $data['error'] = "ONLY POST METHOD ALLOWED";
   }

   echo json_encode($data);

?>