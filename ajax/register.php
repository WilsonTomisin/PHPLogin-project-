<?php
    define('__CONFIG__',true);
    require_once '../config.php';



    
    


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("content-type: application/json");
         // Always return JSON format.
      
        
        $return = [];

  
        $return["redirect"] = "index.php?='this_was_a_redirect.'";
        //$return["name"] = "Wilson Tomisin";
        echo json_encode($return, JSON_PRETTY_PRINT); die();
    } else{
        die('dead');
    }
   


   

?>
 