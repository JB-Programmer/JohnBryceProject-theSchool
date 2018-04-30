<?php




$stdId = $theStudent['idstudent'];    
$stdName = $theStudent['studentname'];
$stdPhone = $theStudent['studentphone'];
$stdEmail = $theStudent['studentemail'];
$stdImg = $theStudent['studentimage'];

//ORGANIZAR TIPO TABLA ESTAS COSAS
echo "<form method='post' action='school.php'>";
    echo "<table>";
    echo "<tr><div>
                <td><a class='' href='school.php?idstudenttoedit=".$stdId."'>Edit</a><td>
        </div><tr>";
    echo  "<tr><td><img class = 'maxwidth175 centered' src='".$stdImg."' alt='TODOADDALT'></td>";
    echo  "<td><span class ='headeronestudent'>".$stdName.".</span><br>";   
    echo  "<p>".$stdPhone.".</p>";
    echo  "<p>".$stdEmail."</p>";
    echo "</td></tr></table>";
echo "</form><br>";

echo "<hr class='hrCourseStudents'>";

for ($i=0; $i<count($coursesofthisstudent); $i++){
echo "<div class='coursesOfStudent'>";
    echo  "<img class = 'maxwidth100 centered' src='".$coursesofthisstudent[$i]['courseimage']."' alt='TODOADDALT'>";
    echo "<span class='studentname'>".$coursesofthisstudent[$i]['coursename']."</span>";
echo "</div>";
}




?>