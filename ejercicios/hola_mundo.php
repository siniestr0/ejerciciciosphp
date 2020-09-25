
<!-- creamos la estructura de un html, al guardar el archivo como php, CODE la genera de forma automatica se escribimos HMTL5 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<!-- ahora en el body ponemos la estructura php para mostrar el contenido -->

    <?php 

    // para añadir salto de linea se pone \n
    $cadena = "Hola Mundo ";
    echo $cadena . "esto es un echo" . "<br>";
    
    print $cadena . "esto es un print";
    ?>
</body>
</html>
