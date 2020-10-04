<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Libro</title>
</head>
<body>

<!-- Creamos el formulario -->

<form action = "" method = "post">
Tittle: <input type = "text" name = "Tittle"><br>
Autor: <input type = "text" name = "Author"><br>
Editorial: <input type = "text" name="Editorial"><br>
Pages: <input type = "text" name="Pages"><br>
<input type = "submit" value = "Send">

</form>

<?php
echo "<br>";
/* comprobamos si los datos que vamos a introducir existen o no. */
    if(isset($_POST) && !empty($_POST)){
        echo "Los datos han sido introducidos.";
        
/* ahora vamos a imrpimir los resultados  con el <pre>  se muestra en forma lista */
        echo "<pre>";
        print_r($_POST);
    }
     else {
         echo "Campos vacíos.";
    }    
?>

</body>
</html>