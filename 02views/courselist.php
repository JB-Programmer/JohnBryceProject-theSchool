<?php
    include '../01models/courseModel.php';

            
    $courses = new CourseClass();

    //I keep in $products the data I get in the while.
    $resultCourses = $courses->get_registers();
    
//TODO3 HACER QUE SEA UNA TABLA EN LUGAR DE UN DIV COURSEBLOCK


    //Showing the array.


    foreach ($resultCourses as $row => $column) {
        echo "<div class='courseblock'>";
        echo  "<img class='maxwith50' src='".$column['courseimage']."' alt='' />";

        echo  "<a href='school.php?idcoursetoshow=".$column['idcourse']."' name='link' id='".$column['idcourse']."' class='coursedata idcourse'>".$column['coursename']."</a>";
        echo  "<div class='coursedata coursedesc'>Description: ".$column['coursedesc']."</div>";
        echo "</div>";
        }

?>