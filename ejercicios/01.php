<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 01</title>
</head>
<body>
    <!-- Aqui en el body es donde se pondrá siempre la estructura del php-->

    <?php

    $nombre = "Jose Luis";
    $apellido1 = "Hervas";
    $apellido2 = "Cruceras";
    $dni = "22579092S";
    $telefono = "666000666";
    $mail = "asd@asd.com";

echo "<table>";     //asi se crea la tabla
echo "<tr>";        //creamos una columna
echo "  <th> $nombre  </th>";   //nombre de la columna
echo "  <th> $apellido1 </th>";
echo "  <th> $apellido2 </th>";
echo "  <th> $dni </th>";
echo "  <th> $telefono </th>";
echo "  <th> $mail </th>";
echo "</tr>";       // fin de la primera columna
echo "</table>";

    ?>
</body>
</html>