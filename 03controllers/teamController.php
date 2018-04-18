<?php





//Login Controller
if(isset($_GET['email'])){
    include '../01models/teamModel.php';
    //Create a new object called Team Table
    $login = new TeamTable();
    //Execute login check function, returns 1 or 0.
    $login->loginCheck();
    if($login->loginOK ==1){
        header("location:../02views/school.php");
    }else if($login->loginOK ==1) {
        include '../02views/login.php';
        die('Invalid username - password.<br> Please, try again or call the admin');
    }else{
        echo "Login System Fail";

    }
}













?>