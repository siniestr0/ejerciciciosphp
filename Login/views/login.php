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

  <form action="index.php?method=auth" method="POST">
    <label for="">User</label>
    <input type="text" name="user" required> <br> <!-- pongo require para que sea campo obligatorio-->
    <label for="">Password</label>
    <input type="password" name="password" required> <br>
    <input type="submit">
  </form>


</body>
</html>