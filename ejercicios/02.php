<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de multiplicar</title>
</head>
<body>
    <?php
    $multiplicador = 8;
    echo "tabla del " . $multiplicador . "<br>" ;
   for ($base = 1; $base <= 10; $base++){
            echo $multiplicador . " x " . " $base ". "= ". ($multiplicador * $base) . "<br>";
   }

    ?>
</body>
</html>