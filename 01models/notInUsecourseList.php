<!-- <?php


include_once 'conexionCourses.php';

class getCourses extends Conexion{


    public function __construct(){

        parent::__construct();
        
    }

    public function get_registers(){
        $getcourselist = 'SELECT * FROM COURSES';



/*          With the method prepare that receive the sql, we will 
        receive a pdo statement object, that I will save in $result */
        $resultado = $this->conexion_db->prepare($getcourselist);

        /* Now I execute that object with the ? inside. This array is built
        automatically with the parameters in the order of the ??? I inserted 
        UPDATED: MADE WITH MARCADORES*/
        $resultado->execute(array());
        //Example with markers PARA EL PROYECTO SI USE MARCADORES$resultado->execute(array(':seccion'=>$seccion, ':pais'=>$pais));
       

        //I want to save the result in a array and return it without showing it
        $coursesArray = $resultado->fetchAll(PDO::FETCH_ASSOC);
    
        return $coursesArray;



    }





    
}


?> -->