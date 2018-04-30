<?php

        $nombre_imagen = $_FILES['addstdImage']['name'];
        $tipo_imagen = $_FILES['addstdImage']['type'];
        $tamagno_imagen = $_FILES['addstdImage']['size'];
        $temporal_imagen = $_FILES['addstdImage']['tmp_name'];
    
        if($tamagno_imagen<=3145728){
                if($tipo_imagen=='image/jpg' || $tipo_imagen=='image/jpeg' || $tipo_imagen=='image/gif' || $tipo_imagen=='image/png'){
                //Ruta destino                   //La ruta comienza por la raiz
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/theschool/upload/studentimages/";
                //Ahora le digo que pase de la ruta temporal a la ruta destino: carptemporal, carpetdestino.nombrearchivo
                move_uploaded_file($_FILES['addstdImage']['tmp_name'], $carpeta_destino.$nombre_imagen);
                $imagename = "../upload/studentimages/".$nombre_imagen;
                return $imagename;
            }else{
                $imagename = "../upload/studentimages/defaultimage.jpg";
                return $imagename;
            }
        }else{
            $imagename = "../upload/studentimages/defaultimage.jpg";
            return $imagename;
        }

?>