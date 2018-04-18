<?php

//include 'database.php';

class Courses{

    //Check if it is connect.
    public $isConn;
    protected $datab;


    public function __construct($username="root", $password="", $host="localhost", $dbname="theschool", $options=[]){
        $this->isConn = TRUE;
        try{
            $this->datab = new PDO("mysql:host{$host}; dbname={$dbname}; charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "connected";
        }catch (PDOException $e){
            throw new Exception($e->getMessage());

        }

    }


    //Disconect from DB
    protected function Disconnect(){
        //Esa tercera estructura forma parte del try catch, es opcional, y lo que haya aqui dentro se va a ejecutar haya tenido exito o no.
        $this->datab = NULL;
        $this->isConn = FALSE;             

              
    }

    //Get Row
    public function getRow($query, $params=["1"]){
        try{
            $stmt=$this->datab->prepare($query);
            $stmt=execute($params);
            return $stmt->fetch();
        }catch (PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    //Get allRows
    public function getAllRows($query, $params =[]){
        try{
            $stmt=$this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
        
    }

    //Insert Row
    public function setRow($query, $params =[]){
        try{
            $stmt=$this->datab->prepare($query);
            $stmt=execute($params);
            echo 'new row inserted';
            return TRUE;
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }

    }


    //Update Row

    public function updateRow($query, $params =[]){
        $this->insertRow($query, $params);
    }
    
    //Delete Row

    public function deleteRow($query, $params =[]){
        $this->insertRow($query, $params);
    }






}


function die_r($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();

}



$db = new Courses();

$getRow = $db->getRow("SELECT * FROM courses WHERE id = ?");

$die_r($getRow);

?>