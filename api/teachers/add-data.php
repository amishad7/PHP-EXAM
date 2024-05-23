<?php

 
   Header("Access-Control-Allow-Methods: POST");
   Header("Content-type: application/json");

    include "../../config/config.php";

    $config = new Config();

   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $id = $_POST['id'];
  

    $res = $config->addTeach($name,$lastname,$id);

    if($res){

        $data['response'] = "Data inserted into teacher table";

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