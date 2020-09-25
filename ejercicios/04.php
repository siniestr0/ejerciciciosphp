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

$valor1=1;
$valor2=1;

// fibonacci   1+1= 2 2+1= 3  3+2 = 5  3+5=8 ...   ( 1,1,2,3,5,8 ...)
// se suma el valor anterior al valor siguiente para sacar el siguiente 
echo $valor1 ." ";
    while ($valor1<=10){  // Aquí sacara los 10 primeros valores
    // no muestra los 10 primeros valores, solo 7
        echo $valor2 ." ";
        $valor2 += $valor1;   // primero suma y despues asigna
        $valor1 = $valor2 - $valor1;  // para sumarle el valor anterior, hay que restar el anterior del anterior
    }
    ?>

</body>
</html>