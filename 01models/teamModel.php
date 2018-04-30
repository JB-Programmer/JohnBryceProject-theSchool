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
                    //I create the Session and save the data of the user connected in $_SESSION['userconnected'] array
                    session_start();
                    $_SESSION['userconnected'] = [];
                    $_SESSION['userconnected']['id'] = $this->row["id"];
                    $_SESSION['userconnected']['name'] = $this->row["Name"];
                    $_SESSION['userconnected']['email'] = $this->row['email'];
                    $_SESSION['userconnected']['role'] = $this->row["Role"];
                    $_SESSION['userconnected']['phone'] = $this->row['Phone'];
                    $_SESSION['userconnected']['imgsrc'] = $this->row['imgsrc'];
                    $this->loginOK = 1;
                    //Si el usuario no existe le redirijo a la pagina de registro
                }else{
                    //$_SESSION['error']="on";
                    $this->loginOK = 0;
                    include '../02views/login.php';
                    die('Invalid username - password.<br> Please, try again or call the admin');
                }
            return $this->loginOK;
        
        }


        public function addAddmin($name, $role, $phone, $mail, $password, $image){
            $sql = "INSERT INTO TEAM (Name, Role, Phone, email, Password, imgsrc) VALUES (:name, :role, :phone, :mail, :password, :image)";
            $letsaddAdmin = $this->base->prepare($sql);
            $insPassHashed = password_hash($password, PASSWORD_DEFAULT);
            $letsaddAdmin->execute(array(':name'=> $name, ':role'=>$role, ':phone'=>$phone, ':mail'=>$mail, ':password'=>$insPassHashed, ':image'=>$image));

        }


        public function getOneMember($id){
            $sql = "SELECT * FROM TEAM WHERE id=:idmember";
            $letsShow = $this->base->prepare($sql);
            $letsShow->execute(array(':idmember'=>$id));
            $result = $letsShow->fetchAll(\PDO::FETCH_ASSOC);
            $theresult = $result['0'];
            return $theresult;

        }


        public function getAllMembers(){ //Returns Array of members AllTeamMembers
            $sql = "SELECT * FROM TEAM";
            $conexion = $this->base->prepare($sql);
            $conexion->execute();
            $AllTeamMembers = $conexion->fetchAll(\PDO::FETCH_ASSOC);
            return $AllTeamMembers;
        }

        public function updateMemberInfo($id, $name, $role, $phone, $email, $image){
            $query = "UPDATE TEAM SET Name=?, Role=?, Phone=?, email=?, imgsrc=? WHERE id=?";
            //TODOIMP ANTES DE ESTO PREPARAR IMAGENES
            $result = $this->base->prepare($query);
            $result->execute([$name, $role, $phone, $email, $image, $id]);
                   
        }

        public function deleteMember($id){
            $query = "DELETE FROM TEAM WHERE id=:theid";
            $letsdelete = $this->base->prepare($query);
            $letsdelete->execute(array(':theid'=>$id));

        }





}



?>


