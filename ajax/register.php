<?php
    define('__CONFIG__',true);
    require_once '../config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("content-type: application/json");
         // Always return JSON format.
      
        
        $return = [];
        // check if the user exists..
        $email = Filter::String($_POST["email"]);
        
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $findUser = $conn->prepare("SELECT user_id FROM usersinfo WHERE email = LOWER(:email) LIMIT 1 ");
        $findUser->bindParam(":email", $email, PDO::PARAM_STR);
        $findUser->execute();
        

        if ($findUser->rowCount() == 1) {
            //User exists.
            $return['error'] = "You already have an account..";
        } else{
            // CREATE AN ACCOUNT.
            $addUser = $conn->prepare("INSERT INTO usersinfo(email,`password`) VALUES(LOWER(:email'), :password')");
            $addUser->bindParam(':email',$email,PDO::PARAM_STR);
            $addUser->bindParam(':password',$password, PDO::PARAM_STR);
            $addUser->execute();

            //GETS THE LAST USER'S ID
            $user_id = $conn->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;
            $return["redirect"] = "index.php?='this_was_a_redirect.'";
        }
  
        $return["redirect"] = "index.php?='this_was_a_redirect.'";
        //$return["name"] = "Wilson Tomisin";
        echo json_encode($return, JSON_PRETTY_PRINT); die();
    } else{
        die('dead');
    }
   


   

?>
 