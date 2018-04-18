<?php

        include_once '../01models/courseModel.php';
        //TODO VIEW FOR THE EDIT COURSEINPUT
        echo "This is the course to show: ".$idcoursetoshow;

        $conexionToGetOneCourse = new CourseClass();

        //I keep in $products the data I get in the while.
        $thecoursetoview = $conexionToGetOneCourse->get_onecourse($idcoursetoshow);

        $studentsInCourse = $conexionToGetOneCourse->getStudentsOfThisCourse($idcoursetoshow);


        foreach ($thecoursetoview as $row => $column) {
            $idcourse = $column['idcourse'];
            $coursename = $column['coursename'];
            $coursedesc = $column['coursedesc'];
            $courseimage = $column['courseimage'];
            echo "<form method='get' action='school.php'>";
                echo "<a class='".hidetosale()."' href='courseoneedit.php?idcoursetoedit=".$idcourse."'><input  type='submit' name='edit' value='Edit' class='btn btn-default'></a>";
                echo "<div class ='headeronecourse'>".$coursename."</div>";
                echo  "<div class='coursedata courseimage'><img src='".$courseimage."' alt='TODOADDALT'></div>";
                echo  "<div id='".$idcourse."'>Id: ".$idcourse."</div>";
                echo  "<div>Description: ".$coursedesc."</div>";
                $_SESSION['activecourse'] = $idcourse;
            echo "</form><br>";
        }
        

  
            
            echo "<br>";




?>