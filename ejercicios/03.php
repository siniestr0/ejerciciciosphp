<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros divisibles por 3</title>
</head>
<body>
    
    <?php

echo "Mostrar los números divisibles por 3 del 1 al 10" . "<br>";
    for ($x = 1; $x <= 10; $x++) {

        if ( $x % 3 == 0) {
         echo $x . " es divisible por 3 " . "<br>";
        }
    }


    ?>

</body>
</html>