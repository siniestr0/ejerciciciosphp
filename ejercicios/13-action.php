<?php


if(isset($_POST) && !empty($_POST)){
        echo "Cheking  ..." . "<br>";
        echo "Welcome  $_POST[Name]";
        
/* ahora vamos a imrpimir los resultados  con el <pre>  se muestra en forma lista */
        echo "<pre>";
        print_r($_POST);
    }
     else {
         echo "Name field is require.";
    } 