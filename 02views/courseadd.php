<?php

                  
        echo "<form  method='post' action='' enctype='multipart/form-data'>
                <div class='form-group row'>
                    <input type='submit' value='Add' class='btn btn-default'>
            
                 </div>

                 <div class='form-group row'>
                        <label for='addcoursename' class='courseName col-sm-2 col-form-label'>Name:</label>
                        <div class='col-sm-10'><input type='text' class='form-control coursename' name='addcoursename' required></div>
                </div>

                <div class='form-group row'>
                        <label for='addcoursedesc' class='idcourse col-sm-2 col-form-label'>Description:</label>
                        <div class='col-sm-10'><input type='text' class='form-control coursedesc' name='addcoursedesc' required></div>
                </div>    
                
                <div class='form-group row'>
                   <label for='addcourseimage' class='col-sm-2 col-form-label'>Imagen:</label>
                   <div class='col-sm-10'><input type='file' name='addcourseimage' size='50' required></div>
                  
                </div>                   
                                 
            </form>";






?>