<?php
include_once('../00assets/03debugging/phpDebug.php');
//include_once('../03controllers/rolecontroller.php');
include_once('../03controllers/navListController.php');

?>
    <!doctype html>
    <head>
        <title>The School by J. Benchimol</title>

<!--         <link rel="stylesheet" href="../00assets/01css/bootstrap.css" crossorigin="anonymous">
 -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../00assets/01css/main.css" />
        <link rel="shortcut icon" type="image/png" href="../00assets/04images/logo.png"/>
        <!-- TODO3 Cambiar fuentes -->

    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-brand" href="../02views/school.php">                          
                        <img class="img-responsive" id="nav-logo" alt="The Computer School Academy" src="../00assets/04images/logo.png">
                    </a>
                </li>
                <li class="<?php navelement(); ?>">
                        <a class="text-center navtext" href="../02views/school.php">School</a>                     
                </li>
                <li class="<?php navelement(); hidetosale(); ?>"> 
                    <a class="text-center navtext" href="../02views/administration.php">Administration</a>
                </li>
                <li class="navbar-nav">
                    <a class="navtext text-center  <?php hiddenclass(); ?>"><?php  echo "User connected: ".$_SESSION['userconnected']['name']?></a>
                </li>
      
                <li class="navbar-nav">
                    <a class="navtext text-center bold <?php hiddenclass(); ?>"><?php  echo "<img class='maxwidth50' src='".$_SESSION['userconnected']['imgsrc']."'>"; ?></a>
                </li>
                                
                <li class="navbar-nav">
                    <a class="navtext text-center  <?php hiddenclass(); ?>" href="../03controllers/logout.php">Log-Out</a>
                </li>
            </div><!-- /.container-fluid -->
        </nav>

  
