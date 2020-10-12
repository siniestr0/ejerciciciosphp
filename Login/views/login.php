<ul>
    <li> <a href="http://ejercicios.local/Login/index.php"> index </a></li>
    <li> <a href="http://localhost/ejerciciciosphp/Login/index.php"> index xampp </a></li>
</ul>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style></style>
  <title>Login</title>
</head>
<body>

  <form action="" method="GET">
    <label for="">User</label>
    <input type="text" name="user" required> <br> <!-- pongo require para que sea campo obligatorio-->
    <label for="">Password</label>
    <input type="password" name="password" required> <br>
    <input type="submit">
  </form>


  <?php
echo "<br>";
/* comprobamos si los datos que vamos a introducir existen o no. */
    if(isset($_GET) && !empty($_GET)){
        echo "Los datos han sido introducidos.";
        
/* ahora vamos a imrpimir los resultados  con el <pre>  se muestra en forma lista */
/* con el POST no guarda datos, con el GET, si que hace un login, y pide recordar password. */
        echo "<pre>";
        print_r($_GET);
    }
     else {
         echo "Campos vacíos.";
    }    
?>
</body>
</html>