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
    'Jordy' => 'Pivot',
    'Jose' => 'Base',
    'Elena' => 'Escolta',
    'Dionis' => 'Alero'
);

foreach ($equipo1 as $position => $element){
    echo $position . ": " . $element . '<br>';
}


print_r($equipo1);

?>
</body>
</html>