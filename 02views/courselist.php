<?php
    include '../01models/courseModel.php';

            
    $courses = new CourseClass();

    //I keep in $products the data I get in the while.
    $resultCourses = $courses->get_registers();
    
//TODO3 HACER QUE SEA UNA TABLA EN LUGAR DE UN DIV COURSEBLOCK


    //Showing the array.


    foreach ($resultCourses as $row => $column) {
        echo "<div class='courseblock'>";
        echo  "<a href='school.php?idcoursetoshow=".$column['idcourse']."' name='link' id='".$column['idcourse']."' class='coursedata idcourse'>Course id: ".$column['idcourse']."</a>";
        echo  "<p class='coursedata coursename'>Name: ".$column['coursename']."</p>";
        echo  "<p class='coursedata coursedesc'>Description: ".$column['coursedesc']."</p>";
        echo  "<div class='coursedata courseimage'><img src='".$column['courseimage']."' alt='TODOADDALT'></div>";
        echo "</div><br><br><br>";
        }

?>