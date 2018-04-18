<?php
    include 'standardMember.php';

class Boss extends standardMember{
/*     Now I have the heritage of all the common columns. Boss have the privilege of
    1.- Changing role 2.- Stablish/change team password.*/

    private $role;
    private $password;

    function __construct($par){
        parent::__construct($par);
        
        $this->setRole($par['role']);
        $this->setPassword($par['password']);

    }


    function setRole($role){
        $this->role = $role;
    }

    function getRole(){
        return $this->role;
    }

    function setPassword($pass){
        $this->password = $pass;
    }

    function getPassword(){
        return $this->password;
    }


}

/* 
        //For internal test
        $par = ['id'=>23, 'name'=>'Jose', 'phone'=>334433, 'email'=>'Jander@clander.com', 'image'=>'undefined', 'role'=>'espabilao', 'password'=>'123'];

        $jander = new Boss($par);

        debugarray($jander);

 */



?>