<?php

    //With session start we recover the data of the superglobal Variable $_SESSION.
    session_start();

    //I want to avoid direct writing of the url
    if(!isset($_SESSION['userconnected'])){
        header('location:login.php');
    }

    include_once('header.php');
    include_once('../03controllers/rolecontroller.php');

    ?>

<div class="row">
    <div class="col-md-12 container the-big-box">
        <div class="col-md-3 big-container course-div">
            <div class="row">
                <div class="col-md-6"><h4>Courses availables:</h4></div>
                <div class="col-md-6">Course Logo</div>
            </div>
            <div class="row">
                            <div class="courselist">
<!--ESTE ES EL CASO DE QUE ESTEMOS EN SCHOOL
 -->                                    <?php  include '../03controllers/leftController.php';?>
                            </div>
            </div>
        </div>
        <div class="col-md-3 big-container students-div">
            <div class="row">
                <div class="col-md-6"><h4>Students:</h4></div>
                <div class="col-md-6">Student Logo</div>
            </div>
            <div class="row">Students Data</div>
        </div>
        <div class="col-md-6 big-container extended-container">Main Container
            <?php
                include_once '../03controllers/courseRightContainerController.php';
            ?>
        </div>
<!--         <div>Role: <?php var_dump($_SESSION['userconnected']['role']);        ?></div>
 -->    
    </div>
</div>


<?php
    include_once('footer.php');
    debugarray($_SESSION);
?>