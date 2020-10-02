<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array paises</title>
</head>
<body>

<?php

$paises = array ("España " , "Francia " , "Rumania " , "Portugal ");


//foreach clave
echo "Recorremos el array con un foreach ";
echo "<br>";
foreach ($paises as $position => $element){

    echo $position = $element ."<br>";
    
}

echo "var_dump" . "<br>";
var_dump($paises);
echo "<br>";
echo "print_r" . "<br>";
print_r($paises);

?>

    
</body>
</html>