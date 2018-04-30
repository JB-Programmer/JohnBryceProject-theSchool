<?php

    if(isset($_FILES['image'])){
        $nombre_imagen = $_FILES['image']['name'];
        $tipo_imagen = $_FILES['image']['type'];
        $tamagno_imagen = $_FILES['image']['size'];
        $temporal_imagen = $_FILES['image']['tmp_name'];
        //echo "EL NOMBRE DE LA IMAGEN ES: ".$temporal_imagen;

        //Checking image size
        if($tamagno_imagen<=3145728){
            //Checking format image
            if($tipo_imagen=='image/jpg' || $tipo_imagen=='image/jpeg' || $tipo_imagen=='image/gif' || $tipo_imagen=='image/png'){
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/theschool/upload/teamimages/";
                move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino.$nombre_imagen);
                $imagename = "../upload/teamimages/".$nombre_imagen;
                return $imagename;
            }else{
                $imagename = "../upload/teamimages/default.png";
                return $imagename;
            }
        }else{
            $imagename = "../upload/teamimages/default.png";
            return $imagename;
        }
    }else{
        $imagename = $_POST['oldimage'];
        return $imagename;
    }

?>





