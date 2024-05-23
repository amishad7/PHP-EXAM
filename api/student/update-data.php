<?php

header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: application/json");

include "../../config/config.php";

$config = new Config();

if ($_SERVER['REQUEST_METHOD']=='PUT' || $_SERVER['REQUEST_METHOD'] == 'PATCH') 
{
   
    $input = file_get_contents('php://input'); // return string
   
    parse_str($input,$_UPDATE);

    $name = $_UPDATE['name'];
    $age = $_UPDATE['age'];
    $class = $_UPDATE['class'];
    $id = $_UPDATE['id'];

    $res = $config->updateData($name,$age,$class,$id);

    if ($res) {
        $data['response'] = "Data Updated Successfully...";
        
    } else {
        $data['response'] = "Data Updation Failed...";
    }

} else {
    $data['error'] = "USE PUT and PATCH HTTP METHODS";
}
    
echo json_encode($data);


?>
