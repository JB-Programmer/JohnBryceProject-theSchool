<?php


        $nombre_imagen = $_FILES['addcourseimage']['name'];
        $tipo_imagen = $_FILES['addcourseimage']['type'];
        $tamagno_imagen = $_FILES['addcourseimage']['size'];
        $temporal_imagen = $_FILES['addcourseimage']['tmp_name'];
    
/*         echo $nombre_imagen."<br> Tipo imagen:";
        echo $tipo_imagen."<br>";
        echo $tamagno_imagen."<br>";
        echo $temporal_imagen."<br>"; */
    
        //Antes incluso de darle la ruta de dsetion le indico que solo lo haga si el tamano es menor que un mega
    
        if($tamagno_imagen<=3145728){
            
            if($tipo_imagen=='image/jpg' || $tipo_imagen=='image/jpeg' || $tipo_imagen=='image/gif' || $tipo_imagen=='image/png'){
                //Ruta destino                   //La ruta comienza por la raiz
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/theschool/upload/courseimages/";
    
                //Ahora le digo que pase de la ruta temporal a la ruta destino: carptemporal, carpetdestino.nombrearchivo
                move_uploaded_file($_FILES['addcourseimage']['tmp_name'], $carpeta_destino.$nombre_imagen);

                $imagename = "../upload/courseimages/".$nombre_imagen;

                return $imagename;
//TODOSITENGO TIEMPO AVISAR DE ERROR
            }else{
                $imagename = "../upload/courseimages/defaultimage.jpg";
                return $imagename;
            }
        }else{
            $imagename = "../upload/courseimages/defaultimage.jpg";
            return $imagename;
        }

 

 

        


        //TODOIMP AVISARQUE LAS IMAGENES SON GUARDADAS EN UPLOAD Y NO EN THESCHOOL/UPLOADS


?>