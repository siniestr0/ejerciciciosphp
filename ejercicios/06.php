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

$equipo1 = array (
        'nombre' => 'Jordy',
        'nombre' => 'Jose',
        'nombre' => 'Elena',
        'nombre' => 'Ramona',
        'nombre' => 'Dionis',
        
    );


    //foreach clave->elemento
echo "Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($equipo1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
echo 'añadimos un elemento más y hacemos un volcado: <br>';
$equipo1['nacionalidad'] = 'Española';
var_dump($equipo1);

?>

</body>
</html>