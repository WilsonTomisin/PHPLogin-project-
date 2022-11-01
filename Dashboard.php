<?php
    define("__CONFIG__", true);
    require "config.php";

    // echo "Your user id is registered as ".$_SESSION['user_id'].' ==>> '.$_SESSION['email'];

    checkSessionID();

    $userId = $_SESSION['user_id'];

    $findUser = $conn->prepare("SELECT * FROM usersinfo WHERE user_id = :userId LIMIT 1 ");
    $findUser->bindParam(':userId',$userId,PDO::PARAM_INT);
    $findUser->execute();

    if ($findUser->rowCount() == 1) {
        # fetch array.
        $user = $findUser->fetch(PDO::FETCH_ASSOC);
    } else {
        # user's not allowed here.
        header("Location: logout.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard|Welcome </title>
</head>
<body>
    <div>
        <h1>Welcome <?php echo $user['Firstname']; ?> </h1>
        <hr>
        <h4>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Reprehenderit quis accusantium error iure, aspernatur 
            ex esse porro qui neque doloribus.
        </h4>
        <h5>Sign in time: <?php echo date('D d M Y'); ?></h5>
        <h6>You created your account on: <?php echo $user['time_created'] ?></h6>
        <a href="logout.php" target="_blank">logOut</a>
    </div>
</body>
</html>