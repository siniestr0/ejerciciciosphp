<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de multiplicar</title>
</head>
<body>
    <?php
    echo "<table border = 1>";
    echo "<tr>";
        for ($cabecera="0";$cabecera<=10;$cabecera++){ //creamos una lista de numeros hasta el 10 dentro de una tabla
             echo "<th>";
             echo $cabecera;
             echo "</th>";
     }
    echo "</tr>";
/*
base sera el numero por el que despues sera multiplicado.
Se crea con un bucle for para que llegue hasta 10, si ponemos mas, pues multipicara por mas
*/
    for ($base = 1; $base <= 10; $base++){
        echo "<tr>";
        echo "<th>";
        echo $base;
        echo "</th>";
        /*
        Ahora tenemos que crear otro bucle for para hacer la multiplicacion.
        Segun este bucle, vamos a multiplicar base · multiplicador
        de modo que con el bucle, irá añadiendo tantas filas como
        multiplicadores hayamos puesto
        */
             for ($multiplicador =1; $multiplicador <= 10; $multiplicador++){                      
                     $multiplicacion = $base*$multiplicador;                    
                     echo "<td>";                      
                     echo $multiplicacion;                      
                     echo "</td>";              
             }              
     echo "</tr>";          
     }      
    echo "</table>"

    ?>
</body>
</html>