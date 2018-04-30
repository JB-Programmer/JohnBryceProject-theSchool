<?php

    include_once('../01models/studentsModelDB.php');
   
    $gettingTheList = new StudentsDB();

    $listArray = $gettingTheList->getAllStudents();


    include_once('../02views/studentsList.php');

/*     
 */
?>