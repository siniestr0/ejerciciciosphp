<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php    
        $nombre = "Rafael";
        $apellido = "Cabeza";
        $apellido2 = "García";
        $edad = 47;
        $nacionalidad = "Española";
    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre ?> </td>
        </tr>
        <tr>
            <th>Apellido</th>
            <td><?php echo "$apellido $apellido2" ?> </td>
            <td><?php echo '$apellido $apellido2' ?> </td>
        </tr>
        <tr>
            <th>Edad</th>
            <td><?php print "<em>$edad</em>" ?> </td>
        </tr>
        <tr>
            <th>Nacionalidad</th>
            <td><?php echo '<strong>' . $nacionalidad . '</strong>' ?> </td>
            <td><?= $nacionalidad ?></td>
        </tr>
    </table>
</body>
</html>