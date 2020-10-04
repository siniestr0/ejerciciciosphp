<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
</head>
<body>
    <?php

    //Creamos el array
    echo "Array Inicial";
    $paises = [];
    $paises[0]="España";

    echo"<br>";

    foreach ($paises as $position => $element){

        echo $position . ": " . $element . '<br>';  
    }
    echo "Varias formas de imprimir un array" . "<br>";
    echo "var_dump" . "<br>";
    var_dump($paises);
    echo "<br>";
    echo "print_r" . "<br>";
    print_r($paises);

    echo "<br>";
    echo "Array final despues de añadir nuevos elementos";

    $paises[1]="Rumania";
    $paises[2]="Francia";
    $paises[3]="Brasil";

    echo "<br>";

    foreach ($paises as $position => $element){

        echo $position . ": " . $element . '<br>';  
    }

    ?>
</body>
</html>