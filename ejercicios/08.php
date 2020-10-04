<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Basket</title>
</head>
<body>
    <?php
    //Creamos el array
echo "Equiopo Inicial";

    $equipo1 = [];
    $equipo1[0]="Jose";
    $equipo1[1]="Elena";

    echo"<br>";
    foreach ($equipo1 as $position => $element){

        echo $position . ": " . $element . '<br>';  
    }

echo "Equipo Final";
$equipo1 [] = 'Ramona';
$equipo1 [] = 'Dionis';

echo"<br>";
foreach ($equipo1 as $position => $element){

    echo $position . ": " . $element . '<br>';  
}

    ?>
</body>
</html>