<?php 
class App
{
  public function index()
  {
    echo "<h1>PHP & POO</h1>";
    echo "estás en el método index";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $app = new App;
  $app->index();
  ?>
  <hr>
  Fíjate como se ha construido un objeto de la clase App y cómo se ha ejecutado un método.
</body>
</html>