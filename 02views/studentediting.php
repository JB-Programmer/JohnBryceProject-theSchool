<?php



$stdId = $theStudent['idstudent'];    
$stdName = $theStudent['studentname'];
$stdPhone = $theStudent['studentphone'];
$stdEmail = $theStudent['studentemail'];
$stdImg = $theStudent['studentimage'];

//ORGANIZAR TIPO TABLA ESTAS COSAS
echo "<form method='POST' action='../02views/school.php' enctype='multipart/form-data'>";
    echo "<table>
        <tr>
        <div class='form-group row'>
            <input type='submit' value='Save' class='btn btn-default'>
            <a class='btn btn-default' href='school.php?idstudenttoremove=".$stdId."'>Delete</a>        
        </div>    
        <tr>

        <tr>
        <div class='form-group row'>
            <label class='col-sm-2' for='stdId'>Student Id:</label>
            <input type='text' name='stdId' class='col-sm-10 form-control' value= '".$stdId."' readonly>
        </div>
        </tr>

        <tr>
        <div class='form-group row'>
            <label class='col-sm-2' for='editStdName'>Name:</label>
            <input type='text' name='editStdName' class='col-sm-10 form-control' value= '".$stdName."' required>
        </div>
        </tr>

        <tr>
            <div class='form-group row'>
                <label  class='col-sm-2' for='editPhone'>Phone:</label>
                <input type='text' name='editPhone'  class='col-sm-10 form-control' value='".$stdPhone."' form-control' required>
            </div>
        </tr>

        <tr>
            <div class='form-group row'>
                <label class='col-sm-2'  for='editstdEmail'>Email:</label>
                <input type='text' name='editstdEmail' value='".$stdEmail."' class='col-sm-10 form-control' required>
            </div>
        </tr>

        <tr>
            <div class='form-group row'>
                <label class='col-sm-2'  for='addstdImage'>Image:</label>
                <input type='file' name='addstdImage'><img class='col-sm-8 maxwidth100' src='".$stdImg."'>
            </div>
        </tr>

    <tr><td>Courses</td><td>";
    //Showing the checked boxes
        foreach ($resultCourses as $row => $column) {
            echo "<div class='courses'>";
                echo  "<input type='checkbox' name='courses[]' value='".$column['idcourse']."' ";
                        
                        //Echo checeked when the course of the checked box is being cursed by the student
                        for($i=0; $i<count($coursesId); $i++){
                            if($coursesId[$i]==$column['idcourse']){
                                echo "checked";
                            }else{
                                echo '';
                            }
                        };

                echo " id='".$column['coursename']."' class=''>";
                echo "<label for='".$column['idcourse']."' >".$column['coursename']."</label>";
            echo "</div>";
        };


                
            
        
    echo "</td></table>";
echo "</form><br>";







?>

