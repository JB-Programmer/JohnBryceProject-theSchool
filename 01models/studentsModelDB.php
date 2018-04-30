<?php

include_once 'conexion.php';


class StudentsDB extends Conexion{

    private $studentId;
    private $studentName;
    private $studentPhone;
    private $studentEmail;
    private $studentImage;
    private $allStudents;


    function addStudentwithCourses($studentName, $studentPhone, $studentEmail, $studentImage, $studentcourses){
        $query = "INSERT INTO STUDENTS (studentname, studentphone, studentemail, studentImage) VALUES (:sname, :sphone, :semail, :simage)";
        $result = $this->base->prepare($query);
        $result->execute(array(':sname'=>$studentName, ':sphone'=>$studentPhone, ':semail'=>$studentEmail, ':simage'=>$studentImage));
        
        //Get the Id of this new student.
        $sql = "SELECT idstudent FROM STUDENTS WHERE studentemail='$studentEmail'";
        $idofthis = $this->base->prepare($sql);
        $idofthis->execute();
        $idofnewStudent = $idofthis->fetch();
        $idStudent = $idofnewStudent['idstudent'];
        //Adding courses to this student.

        for($i=0; $i<count($studentcourses); $i++){
            /* var_dump($idStudent);
            echo "<br>";
            echo $studentcourses[$i]."<br><br>"; */
            $query = "INSERT INTO coursesandstudents (courseId, studentId) VALUES ('".$studentcourses[$i]."', $idStudent)";
            $result = $this->base->prepare($query);
            $result->execute();
        }

        //include_once("Location: ".$_SERVER['DOCUMENT_ROOT']."/theschool/02views/school.php?idstudenttoshow=$idStudent");
        

    }


    function deleteStudent($studentId){
        $sql = "DELETE FROM STUDENTS WHERE idstudent=$studentId";
        $letsdelete = $this->base->prepare($sql);
        $letsdelete->execute();
        //When the students has been deleted, we should delete also the relation student/course
        $this->deleterelationstudentcourse($studentId);
    }

    
    function deleterelationstudentcourse($studentId){
        $sql = "DELETE FROM coursesandstudents WHERE studentId=$studentId";
        $letsdelete = $this->base->prepare($sql);
        $letsdelete->execute();
        
    }


    function addCoursesToStudent($student, $course){


    }

    function getAllStudents(){
        $query = 'SELECT * FROM STUDENTS';
        $result = $this->base->prepare($query);
        $result->execute(array());
        $students = $result->fetchAll(PDO::FETCH_ASSOC);
        return $students;

    }



    function getOneStudent($studentId){
        $queryGetOneStudent = "SELECT * FROM STUDENTS WHERE idstudent=$studentId";
        $theStudent = $this->base->prepare($queryGetOneStudent);
        $theStudent->execute();
        $selectedStudent = $theStudent->fetch(PDO::FETCH_ASSOC);
        return $selectedStudent;
        $theStudent->closeCursor();
    }

    public function getStudentsOfThisCourse($studentId){
        $query = "SELECT * FROM COURSESANDSTUDENTS WHERE studentId = $studentId";
        $resultado = $this->base->prepare($query);
        $resultado->execute(array());
        $arrayOfIdCourses = [];
        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
           $arrayOfIdCourses[]=$registro['courseId'];
        }
        $coursesOfTheStudent = $this->getCoursesOfThisStudent($arrayOfIdCourses);       
        return $coursesOfTheStudent;
               
    }


    function getCoursesOfThisStudent($arrayOfId) {
        $fullDataOfCoursesOfThisStudent = [];
        for($i=0; $i<count($arrayOfId); $i++){
                $query = "SELECT * FROM COURSES WHERE idcourse = $arrayOfId[$i]";
                $resultado = $this->base->prepare($query);
                $resultado->execute();
                $courseApplied = $resultado->fetch();
                $fullDataOfCoursesOfThisStudent[] = $courseApplied;
        }
        return $fullDataOfCoursesOfThisStudent;
    }



    function getJustCoursesId($studentId){
        $query = "SELECT * FROM COURSESANDSTUDENTS WHERE studentId = $studentId";
        $resultado = $this->base->prepare($query);
        $resultado->execute(array());
        $arrayOfIdCourses = [];
        //I want to save the result in a array and return it 
        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
            $arrayOfIdCourses[]=$registro['courseId'];
                
        }
        return $arrayOfIdCourses;
    }


    function updateStudentInfo($studentId, $studentName, $studentPhone, $studentEmail, $studentImage, $studentcourses){
        $query = "UPDATE STUDENTS SET studentname=?, studentphone=?, studentemail=?, studentImage=? WHERE idstudent=?";
        $result = $this->base->prepare($query);
        $result->execute([$studentName, $studentPhone, $studentEmail, $studentImage, $studentId]);
        
        $sql = "DELETE FROM coursesandstudents WHERE studentId=$studentId";
        $letsdelete = $this->base->prepare($sql);
        $letsdelete->execute();
        //Adding courses to this student.

        for($i=0; $i<count($studentcourses); $i++){
            /* var_dump($idStudent);
            echo "<br>";
            echo $studentcourses[$i]."<br><br>"; */
            $query = "INSERT INTO coursesandstudents (courseId, studentId) VALUES ('".$studentcourses[$i]."', $studentId)";
            $result = $this->base->prepare($query);
            $result->execute();
        }


    }

}




?>