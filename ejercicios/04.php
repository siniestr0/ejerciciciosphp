<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>

    <?php

    echo "Mostrar los 10 primero números de la secuencia de fibonacci" . "<br>";
    $valor1 = 1;
    $valor2 = 0;

    for ($i=0; $i <= 10; $i++) { 
        }
        $suma = $valor1 + $valor2;
        $valor1 = $valor2;
        $valor2 = $suma;
        echo $suma . " , ";
    ?>

</body>
</html>