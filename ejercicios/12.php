<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar Campo Formulario</title>
</head>
<body>

<!-- Creamos el formulario -->

<form action = "" method = "post">

Name: <input type = "text" name = "Name" required><br>

<input type = "submit" value = "Send">

</form>

<?php
echo "<br>";
/* comprobamos si los datos que vamos a introducir existen o no. */
    if(isset($_POST) && !empty($_POST)){
        echo "Cheking  ...";
        echo "Welcome $_POST[Name]";
        
/* ahora vamos a imrpimir los resultados  con el <pre>  se muestra en forma lista */
        echo "<pre>";
        print_r($_POST);
    }
     else {
         echo ".";
    }    
?>

</body>
</html>