<?php


    
    function debugarray($objectToPrint) {
      echo "<pre>";
      var_dump($objectToPrint);
      echo "</pre>";
    }

    function debug(){
      // This prints file full path and name
      echo "This file full path and file name is '" . __FILE__ . "'.\n";

      // This prints current line number on file
      echo "This is line number " . __LINE__ . ".\n";
          
      /* 
          // Really simple basic test function

          echo "This is from '" . __FUNCTION__ . "' function.\n"; */
    }


      function textdebug($text){
      echo "I am debugging".$text;
      }
 ?>
