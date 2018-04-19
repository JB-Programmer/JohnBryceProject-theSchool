<?php

              //TODO VIEW FOR THE EDIT COURSEINPUT
        echo "This is the course to show: ".$idcoursetoshow;

      
        foreach ($thecoursetoview as $row => $column) {
            $idcourse = $column['idcourse'];
            $coursename = $column['coursename'];
            $coursedesc = $column['coursedesc'];
            $courseimage = $column['courseimage'];
            echo "<form method='get' action='school.php'>";
                echo "<a class='".hidetosale()."' href='courseoneedit.php?idcoursetoedit=".$idcourse."'><input  type='submit' name='edit' value='Edit' class='btn btn-default'></a>";
                echo "<div class ='headeronecourse'>".$coursename.", ".count($studentsOnThisCourse)." Students.</div>";
                echo  "<div class='coursedata courseimage'><img src='".$courseimage."' alt='TODOADDALT'></div>";
                echo  "<div id='".$idcourse."'>Id: ".$idcourse."</div>";
                echo  "<div>Description: ".$coursedesc."</div>";
                $_SESSION['activecourse'] = $idcourse;
            echo "</form><br>";
        }
        

        
        echo "<hr size='10' />";

        
        for ($i=0; $i<count($studentsOnThisCourse); $i++){
            echo "<div class='studentInCourse'>";
                echo "<img class='rounded maxwith50 hidden-xs' src='../upload/studentsImages/avatardefaulticon.png' />".$studentsOnThisCourse[$i]['studentimage'];
                echo "<span class='studentname'>".$studentsOnThisCourse[$i]['studentname']."</span>";
            echo "</div>";
        }


?>


