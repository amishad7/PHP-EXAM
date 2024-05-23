<?php


        Header("Access-Control-Allow-Methods: GET");
        Header("Content-type: application/json");

        include "../../config/config.php";

        $config = new Config();

        if($_SERVER['REQUEST_METHOD'] = 'POST')
        {
            $id = $_POST['id'];

            $res = $config->fetchSinlgeData($id);
        
            $data['data'] = mysqli_fetch_assoc($res);
        }
        else{
            $data['error'] = "USE POST METHOD";
        }

        echo json_encode($data);

?>