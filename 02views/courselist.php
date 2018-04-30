<?php
    include '../01models/courseModel.php';

            
    $courses = new CourseClass();

    //I keep in $products the data I get in the while.
    $resultCourses = $courses->get_registers();
    
    //Showing the data.
    
    foreach ($resultCourses as $row => $column) {
        echo "<div class='courseblock'>";
        echo  "<a href='school.php?idcoursetoshow=".$column['idcourse']."' name='link' id='".$column['idcourse']."' class='coursedata idcourse'>
                <img class='maxwidth100' src='".$column['courseimage']."' alt='' />
                <span class='mainWord'>".$column['coursename']."</span>
               </a>";
        echo "</div><hr>";
        }
    
    
    

?>