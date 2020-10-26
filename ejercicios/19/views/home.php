<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home ( Que deseas ? )</title>
</head>
<body>

<!--  se usa la etiqueta de php para poder recoger el nombre del usuario de la cookie -->
  <h1>Welcome <?= $_COOKIE['user'] ?></h1>

  <h2>Wish List</h2>

<!-- 2 enlaces a los métodos cerrar sesion y borrar todas las cookies -->

  <ul>
    <pre>
  <?php 
 
    if (count($deseos)) {

        foreach ($deseos as $id => $deseo) {

            //Esta linea es para borrar la cookie sabiendo el id, que se muestra por el foreach AS $ID
            echo "<li> Wish num $id: " . $deseo . ' <a href="?method=delete&id=' . $id . '"> delete</a> </li>';
        }

    } else {

        //si no hay cookies, se muestra este echo
        echo "No wishes yet.";
    } 

?>
<h4><a href="?method=empty">Clear List</a></h4> 

  </ul>
  
<br>

<h2> Add new wish. </h2>

    <form action="?method=new" method="post">
        <label for="new">New Wish</label>
        <input type="text" name="new">
        <input type="submit" value="new">

    </form>

    <h4><a href="?method=close">Log Out</a></h4>
  
</body>
</html>