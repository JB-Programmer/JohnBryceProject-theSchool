<?php

        echo "<div class='row'>";
        echo "<div class='col-md-8 mediumtitle'>Students:</div>";
        echo "<div class='col-md-4'><a href='school.php?addStudent=Add' ><span class='med-gly glyphicon glyphicon-plus-sign'></span></a></a></div>";
        echo "</div>";

    foreach ($listArray as $row => $column) {
            echo "<div class='studentblock'>";
            echo  "<a href='school.php?idstudenttoshow=".$column['idstudent']."' name='link' id='".$column['idstudent']."' class='studentdata idstudent'><img class='maxwidth50' src='".$column['studentimage']."' alt='' />".$column['studentname']."</a>";
            echo "<br>Phone: ".$column['studentphone'];
            echo "</div>";
            echo "<hr>";
        };

        $_SESSION['workingwith'] = "students";


?>