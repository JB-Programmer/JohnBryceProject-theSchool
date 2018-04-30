<?php


    session_start();

    //I want to avoid direct writing of the url
    if(!isset($_SESSION['userconnected'])){
        header('location:login.php');
    }
    include_once('header.php');

    ?>

<div class="row">
    <div class="col-md-12 container the-big-box">
        <div class="col-md-3 big-container course-div">
            <div class="row">
                <div class="col-xs-9"><span class="mediumtitle">Courses availables:</span></div>
                <div class="col-xs-3"><?php echo 
                                            "<a class='' href='school.php?addCourse=add'><span class='med-gly glyphicon glyphicon-plus-sign'></span></a></div>"; 
                                      ?>
            </div>
            <div class="row">
                            <div class="courselist">
                                     <?php  
                                        include_once '../03controllers/schoolLeftController.php';?>
                            </div>
            </div>
        </div>
        <div class="col-md-3 big-container students-div">
            <div class="row">
                <div class="studentslist">
                         <?php  include_once '../03controllers/schoolCenterController.php';?>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 big-container extended-container">
            <?php
                include_once '../03controllers/schoolMainContainerController.php';
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