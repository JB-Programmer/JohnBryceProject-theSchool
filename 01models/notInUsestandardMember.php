<?php

include_once '../00assets/03debugging/phpDebug.php';

class standardMember{

    private $id;
    protected $name;
    protected $phone;
    protected $email;
    protected $image;


    function __construct($par){
        $this->id = $par['id'];
        $this->setName($par['name']);
        $this->setPhone($par['phone']);
        $this->setEmail($par['email']);
        $this->setImage($par['image']);
        debugarray($par);
    }

    //Setters and Getters

    protected function getId(){
        return $this->id;
    }

    protected function setName($name){
        $this->name = $name;

    }

    protected function getName(){
        return $this->name;
    }

    protected function setPhone($phone){
        $this->phone = $phone;

    }

    protected function getPhone(){
        return $this->phone;
    }

    protected function setEmail($email){
        $this->email = $email;

    }

    protected function getEmail(){
        return $this->Email;
    }


    protected function setImage($image){
        $this->image = $image;

    }

    protected function getImage(){
        return $this->image;
    }




}



?>