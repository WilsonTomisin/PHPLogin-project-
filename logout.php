<?php
// after 2 minutes.
   // $past = time() - 120;


    session_start();
    session_destroy($past);
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);

    header("Location: index.php");

?>