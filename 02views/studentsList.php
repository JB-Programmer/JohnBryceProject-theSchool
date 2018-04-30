<?php

        echo "<div class='row'>";
        echo "<div class='col-xs-9 mediumtitle'>Students:</div>";
        echo "<div class='col-xs-3'><a href='school.php?addStudent=Add' ><span class='med-gly glyphicon glyphicon-plus-sign'></span></a></a></div>";
        echo "</div>";

    foreach ($listArray as $row => $column) {
            echo "<div class='studentblock'>";
            echo  "<a href='school.php?idstudenttoshow=".$column['idstudent']."' name='link' id='".$column['idstudent']."' class='studentdata idstudent mainWord'><img class='maxwidth50' src='".$column['studentimage']."' alt='' />
            ".$column['studentname']."</a>";
            echo "<p class='phoneStudentlist'>Phone: ".$column['studentphone'];
            echo "</p></div>";
            echo "<hr>";
        };

        $_SESSION['workingwith'] = "students";


?>