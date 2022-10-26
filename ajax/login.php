<?php
    define('__CONFIG__',true);
    require_once '../config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header("content-type: application/json");
         // Always return JSON format.
      
        
        $return = [];
        // check if the user exists..
        $email = Filter::String($_POST["email"]);
        
        $password = $_POST["password"];
        $findUser = $conn->prepare("SELECT user_id, password FROM usersinfo WHERE email = LOWER(:email) LIMIT 1 ");
        $findUser->bindParam(":email", $email, PDO::PARAM_STR);
        $findUser->execute();
        

        if ($findUser->rowCount() == 1) {
            //User exists.
            // LOG THEM IN...

            //fetches the values of that person and throws it in an array...
            $user = $findUser->fetch(PDO::FETCH_ASSOC);

            // Gets the values on the row for each data.
            $user_id = (int) $user['user_id'];
            $hashed_password = $user['password'];

            // password verification
            if (password_verify($password, $hashed_password)) {
                //redirect to dashboard...
                $return['redirect'] = 'Dashboard.php?="WelcomeBack-user"';
            } else {
                $return['error'] = 'Invalid password or email..';
            }

            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;

            
        } else{
            // USER DOES NOT EXIST.
            $return['error'] = "You do not have an account. Register:<a href='register.php'>create an account</a> ";
        }
  
    
        echo json_encode($return, JSON_PRETTY_PRINT); die();
    } else{
        die('dead');
    }
   


   

?>
 