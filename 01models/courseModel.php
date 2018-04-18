<?php

include_once 'conexion.php';


class CourseClass extends Conexion{



    public function get_registers(){  //Returs $coursesArray, Array Associated

        $getcourselist = 'SELECT * FROM COURSES';

/*      With the method prepare that receive the sql, we will 
        receive a pdo statement object, that I will save in $result */
        $resultado = $this->base->prepare($getcourselist);

        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted*/
        $resultado->execute(array());
        //Example with markers PARA EL PROYECTO SI USE MARCADORES$resultado->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
       

        //I want to save the result in a array and return it without showing it
        $coursesArray = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
        return $coursesArray;


    }

    public function get_onecourse($idtoshow){  //Return array with one course data

        $getonecourse = "SELECT * FROM COURSES WHERE idcourse=$idtoshow";

/*          With the method prepare that receive the sql, we will 
        receive a pdo statement object, that I will save in $result */
        $thecourse = $this->base->prepare($getonecourse);

        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted 
        UPDATED: MADE WITH MARCADORES*/
        $thecourse->execute(array());
        //Example with markers PARA EL PROYECTO SI USE MARCADORES$thecourse->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
       

        //I want to save the result in a array and return it without showing it
        $selectedCourse = $thecourse->fetchAll(PDO::FETCH_ASSOC);

        return $selectedCourse;

        $thecourse->closeCursor();

    }


    public function getStudentsOfThisCourse($idtoshow){

        $studentsInThisCourse = "SELECT * FROM COURSES-STUDENTS WHERE courseId=$idtoshow";
        
        $thestudents = $this->base->prepare($studentsInThisCourse);
        
        $thestudents->execute(array());
        
        $arrayStudentsThisCourse = $thestudents->fetchAll(PDO::FETCH_ASSOC);
        
        $studentsInCourse =[];
        foreach ($arrayStudentsThisCourse as $row=>$column){
            
            $studentsInCourse[] = $column['studentId']; 
            //AQUI LO QUE QUIERO ES CAPTURAR TODOS LOS ID DE LOS ESTUDIANTES Y DEVOLVER DATOS.
            
        }    

    }



    public function upd_onecourse($idtoupdate){



    }

    
}

if(isset($_GET['Activate'])){
    if ($_GET['Activate']==1){
        echo "Hello!!!!!!!!!!!!";
    }
}


?>
