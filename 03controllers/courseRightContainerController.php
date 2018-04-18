<?php

        //This is the controler for the main container when exploring/editing course

        //TODO1 que los views solo sean visibles si se inicio sesion
        
        //Click on a course on right menu, it is the first step to make something with an EXISTING course
        if(isset($_GET['idcoursetoshow'])){
            $idcoursetoshow = $_GET['idcoursetoshow'];
            include_once '../02views/courseone.php';
            
        //Updating a course
        } elseif(isset($_GET['editcourse'])){
            //HacerUnaOperacionEnInclude;

        //Clicking on edit course
        } elseif(isset($_SESSION['activecourse'])) {
            if($_SESSION['activecourse']==0){
                echo 'Click on a course to show';
            }else{
                include_once '../02views/courseoneedit.php';
            }
        }else{
            echo "Click to a course or to a student";
        }


?>