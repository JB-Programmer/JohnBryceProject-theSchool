<?php

        //This is the router/controller for the main container when exploring/editing course

        //TODOIMP que los views solo sean visibles si se inicio sesion
  if(isset($_GET['idcoursetoshow'])){ // Borre esta segunda parte porque creo que era innecesaria: && $_SESSION['activecourse']!==0
        //Click on a course on right menu, it is the first step to make something with an EXISTING course
        $idcoursetoshow = $_GET['idcoursetoshow'];
        //To Access to the Course Data
        include_once '../01models/courseModel.php';
        $conexionToGetOneCourse = new CourseClass();
        $thecoursetoview = $conexionToGetOneCourse->get_onecourse($idcoursetoshow);
        $studentsOnThisCourse = $conexionToGetOneCourse->getStudentsOfThisCourse($idcoursetoshow);
        include_once '../02views/courseone.php';
 

    }
    
    
    
    elseif(isset($_GET['idcoursetoedit'])){  // Borre esta segunda parte porque creo que era innecesaria&& $_SESSION['activecourse']==0
     
        $coursetoedit = $_GET['idcoursetoedit'];
        echo $coursetoedit;
        $conexionToGetOneCourse = new CourseClass();
        $thecoursetoview = $conexionToGetOneCourse->get_onecourse($coursetoedit);
        $students = $conexionToGetOneCourse->getStudentsOfThisCourse($coursetoedit);
        $deleteButtonControl = "";
        $numberOfStudents = count($students);
            if(count($students)!==0){
                $deleteButtonControl = " hidden ";
            }
        include_once '../02views/courseoneedit.php';


        
    }elseif(isset($_GET['deletecourse'])){
        include_once('../01models/courseModel.php');
        $courseInstance = new CourseClass();
        $courseInstance->deletecourse($_GET['id']);
        echo "<div class='message'>Course deleted successfully</div>";


        //Edit course info
    }elseif(isset($_GET['newname'])){
        $idtoupdate=$_GET['id'];
        $nametoupdate=$_GET['newname'];
        $desctoupdate=$_GET['newdesc'];
        include_once('../01models/courseModel.php');
        $courseInstance = new CourseClass();
        $update = $courseInstance->upd_onecourse($idtoupdate, $nametoupdate, $desctoupdate);
        $thecoursetoview = $courseInstance->get_onecourse($idtoupdate);
        $studentsOnThisCourse = $courseInstance->getStudentsOfThisCourse($idtoupdate);
        include_once '../02views/courseone.php';

        //Add Course
    }elseif(isset($_POST['addcoursename'])){
        $courseName = $_POST['addcoursename'];
        $courseDesc = $_POST['addcoursedesc'];
        include_once('../03controllers/imagecontroller.php');
        $courseImg = $imagename;
        include_once('../01models/courseModel.php');
        $courseInstance = new CourseClass();
        $addCourse = $courseInstance->addcourse($courseName, $courseDesc, $courseImg);

    }elseif(isset($_GET['idstudenttoshow'])){
        include_once '../01models/studentsModelDB.php';
        $studentId = $_GET['idstudenttoshow'];
        $toGetOneStudent = new StudentsDB();
        $theStudent = $toGetOneStudent->getOneStudent($studentId);
        $coursesofthisstudent = $toGetOneStudent->getStudentsOfThisCourse($studentId);
        include_once('..\02views\studentinfo.php');
        
    }elseif(isset($_GET['addStudent'])){
        include_once('../02views/studentadd.php');
               

    }elseif(isset($_POST['addstdName'])){
        //$imagen = "jander.jpg";
        $name = $_POST['addstdName'];
        $phone = $_POST['addstdPhone'];
        $email = $_POST['addstdEmail'];
        $coursesofTheStudent = $_POST['courses'];
        include_once('../03controllers/imagestudentcontroller.php');
        include_once '../01models/studentsModelDB.php';
        $toAddStudent = new StudentsDB();
        $image = $imagename;
        $theStudent = $toAddStudent->addStudentwithCourses($name, $phone , $email ,$image, $coursesofTheStudent);
    
    
    }elseif(isset($_GET['idstudenttoremove'])){
        $stdIdToDelete = $_GET['idstudenttoremove'];
        $toDeleteStudent = new StudentsDB(); 
        $toDeleteStudent->deleteStudent($stdIdToDelete);
        echo "<div class='message'>Student deleted successfully</div>";
                       
         
    }elseif(isset($_GET['idstudenttoedit'])){
        
        include_once '../01models/studentsModelDB.php';
        $studentId = $_GET['idstudenttoedit'];
        $toGetOneStudent = new StudentsDB();
        $theStudent = $toGetOneStudent->getOneStudent($studentId);
        $coursesofthisstudent = $toGetOneStudent->getStudentsOfThisCourse($studentId);
        $coursesId = $toGetOneStudent->getJustCoursesId($studentId);
        include_once('../02views/studentediting.php');
                
    }elseif(isset($_POST['stdId'])){

        //echo "UPDATING STUDENT";
        $id = $_POST['stdId'];
        $name = $_POST['editStdName'];
        $phone = $_POST['editPhone'];
        $email = $_POST['editstdEmail'];
        $coursesofTheStudent = $_POST['courses'];
        include_once('../03controllers/imagestudentcontroller.php');
        include_once('../01models/studentsModelDB.php');
        $toEditStudent = new StudentsDB();
        $image = $imagename;
        $toEditStudent->updateStudentInfo($id, $name, $phone, $email, $image, $coursesofTheStudent);
                
    }elseif(isset($_GET['addCourse'])){

        include_once('../02views/courseadd.php');

    }




?>