<?php

    //Controller for the Sale
    function hidetosale(){
           if($_SESSION['userconnected']['role']=='sales'){
               return "hidden";
            }else{

//TODO1 Borrar esta linea
                echo "I am manager or admin";
            }
    }



?>