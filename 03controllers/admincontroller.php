<?php

    //This is the default basic views (left and right)
    include_once('../02views/header.php');
    
    include_once('../01models/teamModel.php');
    $toGetAll = new TeamTable();
    $allthemembers = $toGetAll->getAllMembers();
    
    include_once('../02views/adminmainview.php');
    $lavista = new administratorsViews();
    $lavista->leftBasicView($allthemembers);
    

    if(isset($_GET['addAdmin'])){
       $toAddForm = $lavista->addTeamMember(); 


    }elseif(isset($_POST['membername'])){
        $name = $_POST['membername'];
        $phone = $_POST['memberphone'];
        $email = $_POST['memberemail'];
        $password = $_POST['password'];
        $role = $_POST['memberrole']['0'];
        include_once('../03controllers/imageteamcontroller.php');
        $image = $imagename;
        include_once('../01models/teamModel.php');
        $teamInstance = new TeamTable();
        $teamInstance->addAddmin($name, $role, $phone, $email, $password, $image);
        echo "<div class='successfullmsg'>The member has been added successfully.</div>";
    

    }elseif(isset($_GET['idTeamMember'])){
        $instanceTeam = new TeamTable();
        $member = $instanceTeam->getOneMember($_GET['idTeamMember']);
        $lavista->viewOneMember($member);
    
    }elseif(isset($_GET['targetMember']) && isset($_POST['save'])){
        $id = $_GET['targetMember'];
        //var_dump($_POST);
        $name = $_POST['tName'];
        $phone = $_POST['tPhone'];
        $email = $_POST['tEmail'];
        $role = $_POST['memberrole']['0'];
        include_once('../03controllers/imageteamcontroller.php');
        $image = $imagename;
        //echo "El nombre de la imagen es: ".$image;
        include_once('../01models/teamModel.php');
        $teamInstance = new TeamTable();
        $teamInstance->updateMemberInfo($id, $name, $role, $phone, $email, $image);
        //echo "Member Team Updated";
        $instanceTeam = new TeamTable();
        $member = $instanceTeam->getOneMember($id);
        echo "<div class='form-control message'>Member info updated successfully</div>";
        $lavista->viewOneMember($member);


    }elseif(isset($_GET['targetMember']) && isset($_POST['delete'])){
        $id = $_GET['targetMember'];
        include_once('../01models/teamModel.php');
        $teamInstance = new TeamTable();
        $teamInstance->deleteMember($id);
        
        $lavista->memberDeletedSucc();
        $lavista->rightStartView($allthemembers);
        



    }else{
        $lavista->rightStartView($allthemembers);
        
    }

    //require_once('../02views/footer.php');

?>