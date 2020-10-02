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

    $paises = [];
    $paises[0]="España";
    $paises[1]="Francia";
    $paises[2]="Rumania";
    $paises[3]="Portugal";

    echo"<br>";
    foreach ($paises as $position => $element){

        echo $position . ": " . $element . '<br>';  
    }

    echo "var_dump" . "<br>";
    var_dump($paises);
    echo "<br>";
    echo "print_r" . "<br>";
    print_r($paises);

    ?>
</body>
</html>