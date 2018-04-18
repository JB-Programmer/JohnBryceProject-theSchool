<?php 

    //I recover the opened session
    session_start();

    //Close the session
    session_destroy();

    //Redirect to the Login Page
    header('Location: login.php');

 ?>