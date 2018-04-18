<?php
        //include_once '../01models/courseModel.php';

                  $conexionToGetOneCourse = new CourseClass();

                  $idcoursetoedit =  $_SESSION['activecourse'];
                  //I keep in $products the data I get in the while.
                  $thecoursetoview = $conexionToGetOneCourse->get_onecourse($idcoursetoedit);

                  //Showing the array.
                  //echo "<form method='get' action='../02views/school.php'>";
                  
                  //I have to pass the variable to the submit
                        echo "<div class = 'headeronecourse'>Edit Course Info</div>";
                        echo "<input type='submit' name='editcourse' value='Save' class='btn btn-default'>";

//TODO1 HACER ESTE BOTON DE DELETE INVISIBLE    SI: HAY ALUMNOS EN EL CURSO
//                                              SI LO QUE LE DIO LA PERSONA ES A ADD.
                        echo "<input type='submit' name='editcourse' value='Delete' class='btn btn-default'>";
                  foreach ($thecoursetoview as $row => $column) {
                        echo  "<div class='form-group'>
                                    <label for='idcourse' class='idcourse'>Id:</label>
                                    <input type='text' class='form-control courseid' id='".$column['idcourse']."' value='".$column['idcourse']."' readonly>
                              </div>";

                        echo  "<div class='form-group'>
                                    <label for='coursename' class='idcourse'>Name:</label>
                                    <input type='text' class='form-control coursename' id='".$column['coursename']."' value='".$column['coursename']."'>
                              </div>";

                        echo  "<div class='form-group'>
                                    <label for='coursedesc' class='idcourse'>Description:</label>
                                    <input type='text' class='form-control coursedesc' id='".$column['coursedesc']."' value='".$column['coursedesc']."'>
                              </div>";      
                              
            //TODODEVOLVERRESULT
                        echo  "<div class='coursedata courseimage'><img src='".$column['courseimage']."' alt='TODOADDALT'></div>";
                        echo "</div><br><br><br>";
                        

                  //echo "</form>";

            
            





        


    }


?>