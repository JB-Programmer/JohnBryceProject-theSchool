<?php

             
            $idcourse = $thecoursetoview['idcourse'];
            $coursename = $thecoursetoview['coursename'];
            $coursedesc = $thecoursetoview['coursedesc'];
            $courseimage = $thecoursetoview['courseimage'];
            echo "<form method='get' action='school.php'>";
                echo "<div><a class='".hidetosalereturn()."' href='school.php?idcoursetoedit=".$idcourse."'>Edit</a></div>";
                echo  "<img class = 'maxwidth175 centered' src='".$courseimage."' alt='TODOADDALT'>";
                echo "<span class ='headeronecourse mainWord'>Course: ".$coursename.", ".count($studentsOnThisCourse)." Students.</span><br>";
                echo  "<span>Description: ".$coursedesc."</span>";
                //echo  "<div id='".$idcourse."'>Id: ".$idcourse."</div>";
            echo "</form><br>";

        

        
        echo "<hr class='hrCourseStudents'>";

        
        for ($i=0; $i<count($studentsOnThisCourse); $i++){
            echo "<div class='studentInCourse'>";
                echo "<img class='rounded maxwidth50 hidden-xs' src='../upload/studentImages/avatardefaulticon.png' />";
                echo "<span class='studentname'>".$studentsOnThisCourse[$i]['studentname']."</span>";
            echo "</div>";
        }



?>


