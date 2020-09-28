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

$valor1= 0;
$valor2= 1;

for ($i=0; $i <= 10 ; $i++) { 
    
// mostramos valor1
echo $valor1 . "<br>";
// ahora creamos la suma de los dos valores
$suma = $valor1 + $valor2;
//ahora hay que intercambiar los valores para sumar 1
$valor1 = $valor2;

// para cerrar el circulo, volvemos a asignar el valor2 a la suma de los dos valores
$valor2 = $suma;

}

    ?>

</body>
</html>