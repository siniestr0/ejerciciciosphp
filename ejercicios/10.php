<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array asociativo equipo</title>
</head>
<body>
    <?php
    
$equipo1 = array (
    'Posicion' => 'Base',
    'Nombre' => 'Jose',
);

foreach ($equipo1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}

print_r($equipo1);

?>
</body>
</html>