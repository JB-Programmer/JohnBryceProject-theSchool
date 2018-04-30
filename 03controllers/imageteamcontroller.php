<?php



if(isset($_FILES['image'])){
        $nombre_imagen = $_FILES['image']['name'];
        $tipo_imagen = $_FILES['image']['type'];
        $tamagno_imagen = $_FILES['image']['size'];
        $temporal_imagen = $_FILES['image']['tmp_name'];
        //echo "EL NOMBRE DE LA IMAGEN ES: ".$temporal_imagen;

        //Antes incluso de darle la ruta de dsetion le indico que solo lo haga si el tamano es menor que un mega

        if($tamagno_imagen<=3145728){
            //Checking format image
            if($tipo_imagen=='image/jpg' || $tipo_imagen=='image/jpeg' || $tipo_imagen=='image/gif' || $tipo_imagen=='image/png'){
                //Ruta destino                   //La ruta comienza por la raiz
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/theschool/upload/teamimages/";

                //Ahora le digo que pase de la ruta temporal a la ruta destino: carptemporal, carpetdestino.nombrearchivo
                move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino.$nombre_imagen);

                $imagename = "../upload/teamimages/".$nombre_imagen;

                return $imagename;
        //TODOSITENGO TIEMPO AVISAR DE ERROR
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







//TODOIMP AVISAR EN EL CUADRO DE ENVIO DEL TAMANO MAX PERMITIDO Y FORMATOS
//TODOIMP AVISARQUE LAS IMAGENES SON GUARDADAS EN UPLOAD Y NO EN THESCHOOL/UPLOADS


?>





