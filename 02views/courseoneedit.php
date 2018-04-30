<?php




                        echo "<form  method='get' action=''>";
                              echo "<div class = 'headeronecourse'>Edit Course Info</div>";
                              echo "<input type='submit' value='Save' class='btn btn-default' name='save'>";

                              echo "<input type='submit' name='deletecourse' value='Delete' class='btn btn-default ".$deleteButtonControl."'>";
                              echo  "<div class='form-group'>
                                          <label for='idcourse' class='idcourse'>Id:</label>
                                          <input type='text' class='form-control courseid' name='id' value='".$thecoursetoview['idcourse']."' readonly>
                                    </div>";

                              echo  "<div class='form-group'>
                                          <label for='coursename' class='idcourse'>Name:</label>
                                          <input type='text' class='form-control coursename' name='newname' value='".$thecoursetoview['coursename']."'>
                                    </div>";

                              echo  "<div class='form-group'>
                                          <label for='coursedesc' class='idcourse'>Description:</label>
                                          <input type='text' class='form-control coursedesc' name='newdesc' value='".$thecoursetoview['coursedesc']."'>
                                    </div>";      
                                    
                  //TODODEVOLVERRESULT
                              echo  "<div class='coursedata courseimage'><img src='".$thecoursetoview['courseimage']."' alt='TODOADDALT' class='maxwidth175'></div>";
                        
                              
                              echo  "<div>Total: ".$numberOfStudents." students taking this course</div>";  
                              //echo "</div>";  
                             
                        echo "</form>";

                        




   
            
 


?>