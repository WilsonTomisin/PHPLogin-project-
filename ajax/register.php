<?php
    define('__CONFIG__',true);
    require_once '../config.php';



    
    


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("content-type: application/json");
         // Always return JSON format.
      
        
       // $return = ["success"=>true,"failed"=>false];

  
        $return["redirect"] = "../index.php";
        echo json_encode($return, JSON_PRETTY_PRINT); die();
    } else{
        die('dead');
    }
   


   

?>
 