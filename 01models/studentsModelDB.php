<?php

include_once 'conexion.php';


class StudentsDB extends Conexion{

//Return todos los alumnos
//Return la ficha de un alumno
//Editar la ficha de un alumno
//Borrar un alumno
//Agregar a un alumno a la academia
//Agregar un alumno a un curso
//Borrar a un alumno de un curso

    function getAllStudents(){
        $conection = new Conexion();
        
        //Query to get all the Students from the database
        $queryGetAll = 'SELECT * FROM STUDENTS';

        $allStudents = $this->base->prepare($queryGetAll)

        $allStudents->execute(array());

        $studentsArray = $allStudents->fetchAll(PDO::FETCH_ASSOC);

        return $studentsArray;

    }


    function getOneStudent($studentId){
        $queryGetOneStudent = "SELECT * FROM STUDENTS WHERE idstudent=$studentId";

/*          With the method prepare that receive the sql, we will 
        receive a pdo statement object, that I will save in $result */
        $theStudent = $this->base->prepare($queryGetOneStudent);

        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted 
        UPDATED: MADE WITH MARCADORES*/
        $theStudent->execute(array());
        //Example with markers PARA EL PROYECTO SI USE MARCADORES$thecourse->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
        

        //I want to save the result in a array and return it without showing it
        $selectedStudent = $theStudent->fetchAll(PDO::FETCH_ASSOC);

        return $selectedStudent;

        $theStudent->closeCursor();
    }







}




?>