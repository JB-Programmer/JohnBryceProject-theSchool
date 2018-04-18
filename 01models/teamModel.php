<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php

    include 'conexion.php';

class TeamTable extends Conexion{

        public $loginOK;

        public function loginCheck(){  //I is activated just if isset$_GET[email] 
    //Receiving the parametres from the form and avoiding strange characters
                $user = htmlentities(addslashes($_GET['email']));
                $password = htmlentities(addslashes($_GET['password']));


                $sql="SELECT * FROM TEAM WHERE email = ?";
                $query = $this->base->prepare($sql);

                //Associate parameters
                $query->bindParam(1, $user, PDO::PARAM_STR);

                //Execute the query
                $query->execute();

                //In this case, the result is an array just with one row.
                $this->row = $query->fetch(PDO::FETCH_ASSOC);
    
                //I can do it directly because the mail (user) in the database is unique
                if(password_verify($password, $this->row['Password'])){
                    session_start();

                    //I create superglobal variables, and the Session starts
                    $_SESSION['userconnected'] = [];
                    $_SESSION['userconnected']['id'] = $this->row["id"];
                    $_SESSION['userconnected']['name'] = $this->row["Name"];
                    $_SESSION['userconnected']['email'] = $this->row['email'];
                    $_SESSION['userconnected']['role'] = $this->row["Role"];
                    $_SESSION['userconnected']['phone'] = $this->row['Phone'];
                    $_SESSION['activecourse']==0;   

                    $this->loginOK = 1;
/*                     if($this->loginOK==1){
                        header("location:../02views/school.php");
                    } */


                //Si el usuario no existe le redirijo a la pagina de registro
                }else{
                    //$_SESSION['error']="on";
                    $this->loginOK = 0;
                    
                    //include '../02views/login.php';
                    //die('Invalid username - password.<br> Please, try again or call the admin');

        
                }

            return $this->loginOK;


        }

/* 

        TO DO PASAR AQUI EL LOGOUT
        public function logout(){
                //I recover the opened session
                session_start();

                //Close the session
                session_destroy();

                //Redirect to the Login Page
                header('Location: login.php');

        } */



        public function getOneMember($id){  //Return Array $oneMember;

                //Here I will use markers instead of binding params with ?
                $sql="SELECT * FROM TEAM WHERE ID = :idMember";
                                                            

                //Aqui creo un objeto tipo pdo statements:
                $resultado=$this->base->prepare($sql);


                $resultado->execute(array(":idMember"=>$id)); /* Como arguments de este array le pido que me buscque */

                $this->oneMember=$resultado->fetch(PDO::FETCH_ASSOC);

                return $this->oneMember;
                //Fetch nos devuelve la siguiente fila. resultado es el objeto pdo statement.
                /*  while($oneMember=$resultado->fetch(PDO::FETCH_ASSOC)){
                    echo "Id: ".$oneMember["id"]."<br>";
                    echo "Name: ".$oneMember["Name"]."<br>";
                    echo "Role: ".$oneMember["Role"]."<br>";
                    echo "Phone:".$oneMember["Phone"];
                    echo "Email: ".$oneMember["email"]."<br>";
                }
 */
                        //Ahora cerramos el cursor, que es lo que recorre linea a linea. No es imprescindible pero ahorra recursos
        }




        public function getAllMembers(){ //Returns Array of members AllTeamMembers
               
                //Base ya ha sido creada al haber hecho include

                //Lo primero que hace es traer toda la tabla de la base de datos.
                $sql = "SELECT * FROM TEAM";
                
                $conexion = $this->base->prepare($sql);

                //Ahora tengo un array de elementos asociativos
                //AQUI TENGO EL ARRAY 

                $conexion->execute();
                
                //Ahora tengo un array de elementos asociativos
                $this->AllTeamMembers = $conexion->fetchAll(\PDO::FETCH_ASSOC);

                
                return $this->AllTeamMembers;
        }

}

/*     $teamTable = new TeamTable();
    $teamTable->getAllMembers();
    //var_dump($teamTable->AllTeamMembers);

    $teamTable->getOneMember(19);
    var_dump($teamTable->oneMember);

 */



?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Name</td>
      <td class="primera_fila">Role</td>
      <td class="primera_fila">Phone</td>      
      <td class="primera_fila">Email</td>

      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
<?php

/* 
    //Por cada objeto, al que llamo persona, repiteme el codigo que hay dentro del foreach
    foreach($teamTable->registro as $persona):?>

   	<tr>
      <td><?php echo $persona->id?></td>
      <td><?php echo $persona->Name?></td>
      <td><?php echo $persona->Role?></td>
      <td><?php echo $persona->Phone?></td>
      <td><?php echo $persona->email?></td>

 
      <td class="bot"><input type='button' name='del' id='del' value='Borrar'></td>
      <td class='bot'><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>       

<?php

endforeach; */

?>




	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

<p>&nbsp;</p>
</body>
</html>