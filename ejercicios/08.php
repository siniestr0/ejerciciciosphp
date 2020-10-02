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

    $equipo1 = [];
    $equipo1[0]="Jose";
    $equipo1[1]="Jordy";
    $equipo1[2]="Elena";
    $equipo1[3]="Dionis";

    echo"<br>";
    foreach ($equipo1 as $position => $element){

        echo $position = $element ."<br>";   
    }

print_r($equipo1);

    ?>
</body>
</html>