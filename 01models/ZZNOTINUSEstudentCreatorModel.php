<?php

class StudentClass {

    private $studentId;
    private $studentName;
    private $studentPhone;
    private $studentEmail;
    private $studentImage;


    function __construct($studentData){
        $this->studentId->$studentData['studentID'];
        $this->studentName->$studentData['studentName'];
        $this->studentPhone->$studentData['studentPhone'];
        $this->studentEmail->$studentData['studentEmail'];
        $this->studentImage->$studentData['studentImage'];
    }


    function getID{
        return $this->studentId;

    }

    
    function getName{
        return $this->studentName;

    }

    function getPhone{
        return $this->studentPhone;

    }

    function getEmail{
        return $this->studentEmail;

    }

    function getImage{
        return $this->studentImage;

    }



}





?>