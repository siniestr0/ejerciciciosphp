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

$num1=1;
$num2=1;

// fibonacci   1+1= 2   ( 1,1,2,3,5,8 ...)
echo $num1."\n";
while ($num1<10)
{
  echo $num2."\n";
  $num2+=$num1;   
  $num1 = $num2 - $num1;
}
    ?>

</body>
</html>