<?php

    echo "<form method='post' action='../02views/school.php' enctype='multipart/form-data'>
            <table>
                <div class='form-group row'>
                <input type='submit' value='Add Student' class='btn btn-default'>
        
                </div>
                <tr>
                    <div class='form-group row'>
                        <label class='col-sm-2' for='addstdName'>Name:</label>
                        <input type='text' name='addstdName' class='col-sm-10 form-control' required>
                    </div>
                </tr>
                <tr>
                    <div class='form-group row'>
                        <label  class='col-sm-2' for='addstdPhone'>Phone:</label>
                        <input type='text' name='addstdPhone'  class='col-sm-10 form-control' required>
                    </div>
                </tr>

                <tr>
                    <div class='form-group'>
                        <label class='col-sm-2'  for='addstdEmail'>Email:</label>
                        <div class='col-sm-8'><input type='text' name='addstdEmail'  class='form-control' required></div>
                        <div class='col-sm-2'></div>
                    </div>
                </tr>

                <tr>
                    <div class='form-group row'>
                        <label class='col-sm-2'  for='addstdImage'>Image (max size: 3Mb):</label>
                        <div class='col-sm-8'><input type='file' name='addstdImage'  class='form-control' size='50'></div>
                    </div>
                </tr>
    //TODOIMP MOSTRAR LA IMAGEN UNA VEZ ESCOGIDA DEL DIRECTORIO, TAMBIEN AL ANADIR CURSO 
                <tr><td>Courses</td><td>";
        
                foreach ($resultCourses as $row => $column) {
                    echo "<div class='courses'>";
                        echo  "<input type='checkbox' name='courses[]' value='".$column['idcourse']."' id='".$column['coursename']."' class=''>";
                        echo "<label for='".$column['idcourse']."' >".$column['coursename']."</label>";
                    echo "</div>";
                }



        echo    "</td></tr>
                </table>
                </form>";


?>