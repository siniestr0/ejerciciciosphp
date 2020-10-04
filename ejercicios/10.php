<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array asociativo equipo</title>
</head>
<body>
    <?php


echo "Equipo antes de añadir a otro jugador";

$equipo1 = array (
    'Jose' => 'Base',
    'Elena' => 'Escolta',
    
);

echo "<br>";
foreach ($equipo1 as $position => $element){
    echo $position . ": " . $element . '<br>';
}
echo "<br>";
echo "Equipo después de añadir a otro jugador";

$equipo1 ['Ramona'] = 'Ala';
$equipo1 ['Dionis'] = 'Alero';

echo "<br>";

foreach ($equipo1 as $position => $element){
    echo $position . ": " . $element . '<br>';
}

?>
</body>
</html>