<?php
    session_start();
    
    if(isset($_SESSION['user_id'])){

        unset($_SESSION['user_id']); //deletes the session user_id to automatically logout

    }

    header("Location: index.php"); //directing to index page (not logged in page)
    die;
?>