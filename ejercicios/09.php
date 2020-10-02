<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Creamos el array

    $paises = [];
    $equipo1[0]="España";
    $equipo1[1]="Francia";
    $equipo1[2]="Rumania";
    $equipo1[3]="Portugal";

    echo"<br>";
    foreach ($equipo1 as $position => $element){

        echo $position . ": " . $element . '<br>';  
    }

print_r($equipo1);

    ?>
</body>
</html>