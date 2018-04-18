<?php

include_once '..\00assets\03debugging\phpDebug.php';
class Database{


    public $isConn;
    protected $datab;
    public $dbname;



    public function __construct($host="localhost", $dbname="theschool" ,$username="root", $password=""){
        $this->isConn = TRUE;
        try{
            $this->datab = new PDO("mysql:host={$host};  $dbname={$dbname}; charset=utf8", $username, $password);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo "connected to db";
            echo $dbname;


        } catch(PDOException $e){
            throw new Exception ($e->getMessage());
        }

    }
    //Disconect from DB
    protected function disconect(){
        //Esa tercera estructura forma parte del try catch, es opcional, y lo que haya aqui dentro se va a ejecutar haya tenido exito o no.
        $this->datab = NULL;
        $this->isConn = FALSE;             

              
    }


}


/* 
    function connect(){
        try{  //Pildoras lo suele poner junto  

            //Es el objeto conexion. Me pide tres argumentos: el host con la base de datos, el usuario y la contraseña.
            $base = new PDO("mysql:host=$this->servername; dbname=$this->dbname", "$this->username", "$this->password"); //PDO es una libreria con funciones (es como una clase).
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexion ok <br>"; //Con esto puedo ver si consiguio conectar o no.

            //exect es una funci'on de PDO que me permite entre otras, elegir el tipo de caracter.
            $base->exec("SET CHARACTER SET utf8");
 */
        
//TODO CLOSECURSOR
            //$resultado->closeCursor();  //Hemos recorrido con fetch registro a registro la tabla, ahora cerramos el cursor 
                                        //que es el que recorre linea a linea el objeto virtual. 


/*         }catch(Exception $e){  //El catch es como el else y el try como el if. Capturo el error, normalmente le nombro "e", es una convencion
                
                die("Error: ".$e->GetMessage());                        //Esta es una funcion que tiene el objeto creado.

        }


    }
}
 */





/* 
$jaime = new connectToSchool();
$sql="SELECT IDSTUDENT, STUDENTNAME, STUDENTPHONE, STUDENTEMAIL, STUDENTIMAGE FROM STUDENTS";
$sentencia = $jaime->getArray($sql);

var_dump($resultado);


 */






?>