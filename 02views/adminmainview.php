<?php

class administratorsViews {
//TODOImportante explicar que las categorias de administradores son: admin, manager y sale
    
    private $datamember;

    //Show all the team members 
     public function leftBasicView($teamMembers){
        
        echo "<div class='col-md-3 big-container course-div'>
                <div class='row'>
                <div class='col-xs-9 mediumtitle'>Administrators: </div>
                <div class='col-xs-3'><a href='administration.php?addAdmin'><span class='med-gly glyphicon glyphicon-plus-sign'></span></a></div>
                </div>
                <div class='row'>";  
        foreach ($teamMembers as $row => $column) {
/*             echo $_SESSION['userconnected']['role']."<br>";
            echo $column['Role']."<br>"; */
            if($_SESSION['userconnected']['role'] == 'admin'){
                echo "<div class='teamMemberBlock courseblock'>
                    <table><tr><td><img class='maxwidth100' src='".$column['imgsrc']."' alt='' /></td>
                    <td class='textAllTeam'><a href='administration.php?idTeamMember=".$column['id']."' name='link' id='".$column['id']."' class='secondaryWords'>".$column['Name'].",<p>".$column['Role']."</p><p> ".$column['Phone']."</p><p>".$column['email']."</p></a></td>
                    </tr></table></div>";
            }elseif($_SESSION['userconnected']['role'] == 'manager' && $column['Role'] !== 'admin'){
                echo "<div class='teamMemberBlock courseblock'>
                <table><tr><td><img class='maxwidth100' src='".$column['imgsrc']."' alt='' /></td>
                <td class='textAllTeam'><a href='administration.php?idTeamMember=".$column['id']."' name='link' id='".$column['id']."' class='secondaryWords'>".$column['Name'].",<p>".$column['Role']."</p><p> ".$column['Phone']."</p><p>".$column['email']."</p></a></td>
                </tr></table></div><hr>";
            }else{
                echo '';
            }          
        }  
        var_dump($_SESSION['userconnected']);
        echo "</div></div>";
        
    }

 
    public function rightStartView($teamMembers){
        echo "<div class='col-md-9 big-container extended-container'><div class='row vert-align'><h2 class='totalteammembers'>Total team members:".count($teamMembers)."</div></div></div>";        
    }


    public function addTeamMember(){
        echo "
            <div class='col-md-9 big-container extended-container'>
                <form method='POST' action='../02views/administration.php' enctype='multipart/form-data'>
                <div class='row'>
                    <input class='btn btn-default' type='submit' value='Add new member'>
                </div>
                <div class='row'>
                    <div class='col-md-2'><label  for='membername'>Name: </label></div>
                    <div class='col-md-10'><input class='form-control' type='text' name='membername' value=''></div>
                </div>
                <div class='row'>
                    <div class='col-md-2'><label  for='memberphone'>Phone: </label></div>
                    <div class='col-md-10'><input class='form-control' type='text' name='memberphone' value=''></div>
                </div>
                <div class='row'>
                    <div class='col-md-2'><label  for='memberemail'>Email (username): </label></div>
                    <div class='col-md-10'><input class='form-control' type='email' name='memberemail' value=''></div>
                </div>
                <div class='row'>
                    <div class='col-md-2'><label  for='password'>Password: </label></div>
                    <div class='col-md-10'><input class='form-control' type='password' name='password' value=''></div>
                </div>
                <div class='row roleselection'>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='memberrole[]' id='seller' value='seller' checked>
                        <label for='seller'>Seller</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input class='form-check-input' type='radio' name='memberrole[]' id='manager' value='manager'>
                        <label for='manager'>Manager</label>
                    </div>
                </div>
                <div class='form-group row'>
                    <label for='image' class='col-sm-2 col-form-label'>Image (max size: 3Mb):</label>
                    <div class='col-sm-10'><input type='file' name='image' size='50'></div>
                </div>
  
            </form></div>";        

    }

    public function viewOneMember($datamember){
        //Function to hide the option to change the Role of the team member connected
        if($datamember['email']==$_SESSION['userconnected']["email"]){
            $hidden = 'hidden';
        }else{
            $hidden = '';
        };
        echo "<div class='col-md-9 big-container extended-container'>
        
                <div class=''><form method='POST' action='../02views/administration.php?targetMember=".$datamember['id']."' enctype='multipart/form-data'><table>
                    <tr><td><input type='submit' name='save' class='btn btn-primary' value='Save'><td>
                        <td><a href='administrator.php?delete=".$datamember['id']." class='btn alert alert-danger'><input type='submit' class='btn' name='delete' value='Delete'></a></td>
                    </tr>
                    <tr><td><label for='".$datamember['id']."'>Team member Id:</label><td>
                        <td><input class='form-control' type='text' name='".$datamember['id']."' value='".$datamember['id']."' readonly></td>
                    </tr>
                    <tr><td><label for='tName'>Name:</label><td>
                        <td><input class='form-control' type='text' name='tName' value='".$datamember['Name']."'></td>
                    </tr>

                    <tr><td><label for='tPhone'>Phone:</label><td>
                        <td><input class='form-control' type='text' name='tPhone' value='".$datamember['Phone']."'></td>
                    </tr>

                    <tr><td><label for='tEmail'>Email:</label><td>
                        <td><input class='form-control' type='email' name='tEmail' value='".$datamember['email']."'></td>
                    </tr>
                    <tr class='".$hidden."'>
                        <td>
                            <label for='memberrole[]'>Role:</label>
                        </td>
                        <td>
                            <input class='form-check-input' type='radio' name='memberrole[]' id='seller' value='seller' 
                            <label for='seller'>Seller</label>
                        </td>
                        <td>
                            <input class='form-check-input' type='radio' name='memberrole[]' id='manager' value='manager'>
                            <label for='manager'>Manager</label>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><label for='memeberrole[]'>Actual Role: </label></td>
                        <td><input class='form-control' name='memberrole[]' value='".$datamember['Role']."' readonly><td>
                    </tr>

                    <tr><td><td>
                        <td><input class='hidden' name='oldimage' value='".$datamember['imgsrc']."'><img class='maxwidth100' src='".$datamember['imgsrc']."'><td>
                        
                    </tr>
                    <tr><td><label for='image'>Picture:</label><td>
                        <td><input class='form-control' type='file' name='image' value=''></td>
                    </tr>
                    ";
        echo "</div></div></form>";


    }

    public function checkingRoleSeller(){
        if($this->datamember['Role']=='seller'){
        return "checked";
        }
    }


    public function memberDeletedSucc(){
        echo "<div class='col-md-9 big-container extended-container message'>Member deleted from database successfully</div>";
        
    }
   



}


?>