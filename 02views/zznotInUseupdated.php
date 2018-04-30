<?php



        $idtoupdate=$_GET['id'];
        $nametoupdate=$_GET['newname'];
        $desctoupdate=$_GET['newdesc'];
        include_once('../01models/courseModel.php');
        $courseInstance = new CourseClass();
        $update = $courseInstance->upd_onecourse($idtoupdate, $nametoupdate, $desctoupdate);
        echo "Course updated successfully";


?>