<?php
include_once('../00assets/03debugging/phpDebug.php');
?>
    <!doctype html>
    <head>
        <title>The School by J. Benchimol</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../00assets/01css/main.css" />
<!-- TODO3 ADD FAVICON -->
<!-- TODO3 Cambiar fuentes -->

    </head>

    <body>



        <nav class="navbar navbar-default">
        <div class="container-fluid">

<!-- TODO ALINEAR SEGUN LAS ESPECIFICACIONES https://stackoverflow.com/questions/19733447/bootstrap-navbar-with-left-center-or-right-aligned-items -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">                          
                    <img class="img-responsive" id="nav-logo" alt="The Computer School Academy" src="../00assets/04images/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                        <a class="text-center" href=""><span class="sr-only">(current)</span>School</a>
                                    
                </li>
                
                <li> <a class="text-center" href=""><span class="sr-only">(current)</span>Administration</a>
                                
                </li>


<!--            TODO LINK A LA FICHA DEL USUARIO -->
                <li class="navbar-nav">
                    <a class="text-center  <?php hiddenclass(); ?>"><?php  echo " ".$_SESSION['userconnected']['name']?></a>
                </li>
<!-- TODO ENLAZAR LINK A LA FICHA DE USUARIO Y ADEMAS AQUI IRIA LA IMGSRC
 -->                
                <li class="navbar-nav">
                    <a class="text-center bold <?php hiddenclass(); ?>"><?php  echo " ".$_SESSION['userconnected']['imgsrc']?></a>
                </li>
                                
                <li class="navbar-nav">
                    <a class="text-center  <?php hiddenclass(); ?>" href="logout.php">Log-Out</a>
                </li>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
        <!--   

        -->

                    <?php 

                //TODO1 MOVER DE LUGAR
                function hiddenclass(){
                    if(!isset($_SESSION['userconnected'])){
                        echo 'hidden';
                    }else{
                        echo 'block';
                    }
                }



                    ?>
        </div>
