<?php


class Conexion{

    public $base;

    function __construct(){
            try {

                $this->base = new PDO('mysql:host=localhost; dbname=theschool', 'root', '');

                $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->base->exec("SET CHARACTER SET UTF8");

                echo "Connected to DB";

                return $this->base;



            }catch(Exception $e){
                                    
                //I will say to kill this proccess and to show us the error message.
                //We can access to functions of the object exception that allows us
                //to know what is happening. We use to call $e to that object.
                echo "NOT CONNECTED TO DATABASE";

                die('Error: '.$e->getMessage().".<br> Error code: ".$e->getCode().".<br> Line: ".$e->getLine()); //There is also get code, get file and get line


            }


    }
}

?>