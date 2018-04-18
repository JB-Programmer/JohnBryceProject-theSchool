<!-- Pagina pura PHP de verificacion si esta en la base de datos y dirigir al usuario
 -->
<?php


            //htmlentities converts any strange symbol to html.
            //AddSlashes escape any strange character. Avoid sql injection
            $user = htmlentities(addslashes($_GET['email']));
            $password = htmlentities(addslashes($_GET['password']));


        try{
   

            //Conexion data
            $conexion_db = new PDO('mysql:host=localhost; dbname=theschool', 'root', '');

            //Conexion Attributes
            $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion_db->exec("SET CHARACTER SET utf8");

            //SQL INSTRUCTION:
            $sql="SELECT * FROM TEAM WHERE email = ?";

            $query = $conexion_db->prepare($sql);

            //Associate parameters
            $query->bindParam(1, $user, PDO::PARAM_STR);

            //Execute the query
            $query->execute();

            //In this case, the result is an array just with one row.
            $row = $query->fetch(PDO::FETCH_ASSOC);
  

            //I can do it directly because the mail (user) in the database is unique
            if(password_verify($password, $row['Password'])){
                session_start();

                //I create superglobal variables, and the Session starts
                $_SESSION['userconnected'] = [];
                $_SESSION['userconnected']['id'] = $row["id"];
                $_SESSION['userconnected']['name'] = $row["Name"];
                $_SESSION['userconnected']['email'] = $login;
                $_SESSION['userconnected']['role'] = $row["Role"];
                $_SESSION['userconnected']['phone'] = $row['Phone'];
                $_SESSION['activecourse']==0;   

                header("location:../02views/school.php");


            //Si el usuario no existe le redirijo a la pagina de registro
            }else{

                $_SESSION['error']="on";
                include '../02views/login.php';
                die('Invalid username - password');

            } 

        }catch(Exception $e){
                            
            //I will say to kill this proccess and to show us the error message.
            //We can access to functions of the object exception that allows us
            //to know what is happening. We use to call $e to that object.
            echo "not ";

            die('Error: '.$e->getMessage().".<br> Error code: ".$e->getCode().".<br> Line: ".$e->getLine()); //There is also get code, get file and get line


            //ALPROFESOR POR QUE EN LA LINEA ANTERIOR NO ME LO HACE TODO EN ORDEN.


/*         Finally there is a code that i want to be executed in any case, even if there
        has been an error. It includes generally the cleaning of the memory
        that we have been using */
        
        }finally{
            $base = null;
            echo "Conexion closed.<br>";

        }

?>

