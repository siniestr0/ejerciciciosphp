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

echo "<table border=1>";     //asi se crea la tabla
// tambien le podemos poner un borde a la tabla
echo "<tr>";        //creamos una fila
echo "  <th> Nombre  </th>";   //nombre de la fila
echo "  <th> Apellido1 </th>";
echo "  <th> Apellido2 </th>";
echo "  <th> Dni </th>";
echo "  <th> Telefono </th>";
echo "  <th> Mail </th>";
echo "</tr>";       // fin de la primera fila
echo "<tr>";        //Creamos el contenido de la fila
echo "<td> $nombre </td>";
echo "<td> $apellido1 </td>";
echo "<td> $apellido2 </td>";
echo "<td> $dni </td>";
echo "<td> $telefono </td>";
echo "<td> $mail </td>";
echo "</table>";

    ?>
</body>
</html>