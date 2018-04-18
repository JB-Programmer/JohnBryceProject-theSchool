<?php

    include_once '../00assets/03debugging/phpDebug.php';


class Course{

    private $idc;
    private $cName;
    private $cDesc;
    private $cImage;

    function __construct($theCourse){
        $this->setCname($theCourse['cName']);
        $this->setDesc($theCourse['cDesc']);
        $this->setImagecourse($theCourse['cImage']);
    }

    function getId(){
        return $this->idc;
    }

    function setCname($coursename){
        $this->cName = $coursename;
    }

    function getCname(){
        return $this->cName;
    }

    function setDesc($description){
        $this->cDesc = $description;
    }

    function getDesc(){
        return $this->cDesc;
    }

    function setImageCourse($image){
        $this->cImage = $image;
    }

    function getImagecourse(){
        return $this->cImage;
    }


}    







?>


