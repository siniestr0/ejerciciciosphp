<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Baloncesto</title>
</head>
<body>
    
<?php
echo "array()";
echo "<br>";

$equipo1 = array ("Jose " , "Jordy " , "Elena " , "Dionis ");


//foreach clave
echo "Recorremos el array con un foreach ";
echo "<br>";
foreach ($equipo1 as $position => $element){

    echo "<li>$position = $element </li> ";
    
}
echo "<br>";
var_dump($equipo1);



?>

</body>
</html>