<?php

include_once 'conexion.php';


class CourseClass extends Conexion{

    //private $cname;
    //private $cdesc;
    //private $cimag;

    public function addcourse($cname, $cdesc, $cimag){
        $sql = "INSERT INTO COURSES (coursename, coursedesc, courseimage) VALUES (:c_name, :c_desc, :c_img)";
        $resultado = $this->base->prepare($sql);
        $resultado->execute(array(':c_name'=>$cname, ':c_desc'=>$cdesc, ':c_img'=>$cimag));
        
    }

    public function checkname($coursename){
        $getcourse = 'SELECT * FROM COURSES WHERE coursename = $coursename';
        $resultado = $this->base->prepare($getcourse);
        $resultado->execute();
        $coursesArray = $resultado->fetch(PDO::FETCH_ASSOC);

        return $coursesArray;
    }

    public function get_registers(){  //Returs $coursesArray, Array Associated
        $getcourselist = 'SELECT * FROM COURSES';
/*      With the method prepare that receive the sql, we will 
        receive a pdo statement object, that I will save in $result */
        $resultado = $this->base->prepare($getcourselist);
        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted*/
        $resultado->execute(array());    
        //I want to save the result in a array and return it without showing it
        $coursesArray = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
        return $coursesArray;


    }

    public function get_onecourse($cidtoshow){  //Return array with one course data

        $getonecourse = "SELECT * FROM COURSES WHERE idcourse=$cidtoshow";
        $thecourse = $this->base->prepare($getonecourse);
        $thecourse->execute();
        $selectedCourse = $thecourse->fetch(PDO::FETCH_ASSOC);

        return $selectedCourse;

        //$thecourse->closeCursor();

    }

    public function getOneCourseByName($courseName){
        $getonecourse = "SELECT * FROM COURSES WHERE courseName=$cidtoshow";
        /*          With the method prepare that receive the sql, we will 
                receive a pdo statement object, that I will save in $result */
        $thecourse = $this->base->prepare($getonecourse);
        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted 
        UPDATED: MADE WITH MARCADORES*/
        $thecourse->execute();
        //Example with markers PARA EL PROYECTO SI USE MARCADORES$thecourse->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
        //I want to save the result in a array and return it without showing it
        $selectedCourse = $thecourse->fetch(PDO::FETCH_ASSOC);

        return $selectedCourse;

    }

 
    public function getStudentsOfThisCourse($cid){

        $query = "SELECT * FROM COURSESANDSTUDENTS WHERE COURSEID = $cid";
        $resultado = $this->base->prepare($query);
        $resultado->execute();
        $arrayOfIdsStudent = [];
        //I want to save the result in a array and return it without showing it
            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
            
            $arrayOfIdsStudent[]=$registro['studentId'];
                
            }
        $dataOfStudentsInCourse = $this->getAllDataOfStudentsOfThisCourse($arrayOfIdsStudent);
        return $dataOfStudentsInCourse;


    }


    function getAllDataOfStudentsOfThisCourse($arrayOfId) {
        
        $fullStudentsDataOnThisCourse = [];
        for($i=0; $i<count($arrayOfId); $i++){
            
                $query = "SELECT studentname, studentimage FROM STUDENTS WHERE IDSTUDENT = $arrayOfId[$i]";
                $resultado = $this->base->prepare($query);
                $resultado->execute();
                $studentToShow = $resultado->fetch();
                $fullStudentsDataOnThisCourse[] = $studentToShow;
        }
        return $fullStudentsDataOnThisCourse;
    
    }

    public function deletecourse($cid){
        $sql = "DELETE FROM COURSES WHERE idcourse = $cid";
        $resultado = $this->base->prepare($sql);
        $resultado->execute();


    }

    public function upd_onecourse($cid, $cnameUpdated, $cdescUpdated){

        //TODO OPCIONAL bind variables
        $query = "UPDATE courses SET coursename ='$cnameUpdated', coursedesc='$cdescUpdated' WHERE idcourse = $cid";
        $stmt = $this->base->prepare($query);
        $stmt->execute();
    }

    
}


?>
