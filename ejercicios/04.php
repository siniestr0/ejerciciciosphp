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
// ahora creamos la suma de los dos valores que dice la secuencia
$suma = $valor1 + $valor2;

//ahora hay que intercambiar los valores, para más tarde volver a sumarlos
$valor1 = $valor2;

// para cerrar el circulo, volvemos a asignar el valor2 a la suma de los dos valores
$valor2 = $suma;

// ahora ya tendremos la secuencia finalizada

/*
1ª vuelta del bucle
suma almacena la suma de valor1 y valor2
al Valor1 le asignamos valor2
    si valor1 es 0, valor2 es 1 valor1 suma 1.
a valor2 le asignamos suma.

el resultado final de la primera vuelta es 0+1 = 1. y se mestra 1,1

*/

}

    ?>

</body>
</html>