<?php

    function hiddenclass(){
        if(!isset($_SESSION['userconnected'])){
            echo 'hidden';
        }else{
            echo 'block';
        }
    }

    //Hide the element when session has not been started
    function navelement(){
        if(session_status() == PHP_SESSION_NONE){
            echo "hidden";
        }else{
            echo "";
        }

    }


    function hidetosale(){
        if(isset($_SESSION)){
            if($_SESSION['userconnected']["role"]=='seller'){
                echo " hidden ";
            }
        }
    }


    function hidetosalereturn(){
        if($_SESSION['userconnected']['role']=='seller'){
            return "hidden";
        }
    }

?>