<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nombre con minimo caracteres</title>
</head>
<body>
    
<!-- Creamos el formulario -->

<form action = "13-action.php" method = "post">

<!-- si ponemos al final del input un require, este campo será obligatorio-->
Name: <input type = "text" name = "Name" required><br>

<input type = "submit" value = "Send">

</form>

</body>
</html>