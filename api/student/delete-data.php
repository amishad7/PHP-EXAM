<?php

 
   Header("Access-Control-Allow-Methods: POST");
   Header("Content-type: application/json");

    include "../../config/config.php";

    $config = new Config();

   if($_SERVER['REQUEST_METHOD'] == 'DELTE')
   {

    $input = file_get_contents("php://input");
    parse_str($input,$_DELETE);

    $id = $_DELETE['id'];
    
    $res = $config->deleteSTUD($id);

    if($res){

        $data['response'] = "Data removed from student table";

    }else{
        $data['response'] = "Data deletion failed";

    }
   }
   else
   {
     $data['error'] = "ONLY DELETE METHOD ALLOWED";
   }

   echo json_encode($data);

?>