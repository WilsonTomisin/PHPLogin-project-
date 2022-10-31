<?php
    define('__CONFIG__',true);
    require_once '../config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("content-type: application/json");
         // Always return JSON format.
      
        
        $return = [];
        // FILTER DATA INPUTS FROM FORM.
        $fname = $_POST["text"];
        $lname = $_POST["text2"];
        $email = Filter::String($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        // $gender = $_POST["radio"];


        $findUser = $conn->prepare("SELECT user_id FROM usersinfo WHERE email = LOWER(:email) LIMIT 1 ");
        $findUser->bindParam(":email", $email, PDO::PARAM_STR);
        $findUser->execute();
        

        if ($findUser->rowCount() == 1) {
            //User exists.
            $return['error'] = "You already have an account.. \n Please login: <a href='login.php'>login</a>";
            
        } else{
            // CREATE AN ACCOUNT.
            $addUser = $conn->prepare("INSERT INTO usersinfo(Firstname,Lastname,email, password,Gender) VALUES(:Firstname,:Lastname,LOWER(:email),:password,:Gender)");
            $addUser->bindParam(":email",$email,PDO::PARAM_STR);
            $addUser->bindParam(":password",$password, PDO::PARAM_STR);
            $addUser->bindParam(":Firstname",$fname,PDO::PARAM_STR);
            $addUser->bindParam(":Lastname",$lname,PDO::PARAM_STR);
            $addUser->bindParam(":Gender",$gender);
            $addUser->execute();

            //GETS THE LAST USER'S ID
            $user_id = $conn->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;
            $return["redirect"] = "Dashboard.php?='new+user!!!.'";
        }
  
        //$return["name"] = "Wilson Tomisin";
        echo json_encode($return, JSON_PRETTY_PRINT); die();
    } else{
        die('dead');
    }
   


   

?>
 