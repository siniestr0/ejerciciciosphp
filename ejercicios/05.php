<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Divisibles</title>
</head>
<body>
    
<?php

const num1 = 169;
const num2 = 193;

for($i = 1; $i < num1; $i ++) {
        if (num1 % $i == 0) {
            
            echo "num1 " . "tiene " . $i . " divisores";
        }        
}
echo "<br>";

for($i = 1; $i < num2; $i ++) {
    if (num2 % $i == 0) {
        
        echo "num2 " . "tiene " . $i . " divisores";
    }        
}

?>

</body>
</html>