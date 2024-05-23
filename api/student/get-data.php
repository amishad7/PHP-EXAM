<?php


        Header("Access-Control-Allow-Methods: GET");
        Header("Content-type: application/json");

        include "../../config/config.php";

        $config = new Config();

        if($_SERVER['REQUEST_METHOD'] = 'GET')
        {
            $res = $config->getData();

            $allData = []; // array
            while ($result = mysqli_fetch_assoc($res)) {
                array_push($allData, $result);

            }
        
            $data['data'] = $allData;
        }
        else{
            $data['error'] = "USE GET METHOD";
        }

        echo json_encode($data);

?>