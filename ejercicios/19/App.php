<?php

class App {
//atributos publicos
public $user;
public $password;


//Siempre se crea la funcion run, para que se ejecute por defecto el método index
public function run(){

    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }
  
    $this->$method();      
}

// Esto es lo que se verá por defecto
public function index(){

    include('views/index.php');

}

public function login(){

      include('views/index.php');

}

public function auth(){

    $user = $_POST['user'];
    $password = $_POST['password'];

    setcookie("user", $user, time() + 3600);
    setcookie("password", $password, time() + 3600);

    header("location: index.php?method=home");

}

public function home(){

    if (!isset($_COOKIE['user'])) {

        //no se pueden usar echo antes de un header
        //recordar poner bien el metodo para que nos redireccione donde queremos
        //redirecciona a home, para poder empezar a añadir cookies
        header('Location: ?method=home');

        return;

    } // comprobamos que el deseo no existe, y lo añade al array
      if (isset($_COOKIE['deseos'])) {

        $deseos = unserialize($_COOKIE['deseos']);

    } else {
        
        $deseos = [];

    }

    include('views/home.php');

}

public function new(){

    $new = $_POST['new'];

    if (isset($_COOKIE['deseos'])){

        $deseos = unserialize($_COOKIE['deseos']);

    } else {

        $deseos = [];

    }

        $deseos[] = $new;

        setcookie('deseos', serialize($deseos), time() + 60*60*2);

        header('Location: index.php?method=home');

}

public function delete(){

    if (isset($_COOKIE['deseos'])){

        $deseos = unserialize($_COOKIE['deseos']);

    } else {

        $deseos = [];

    }
        // para poder ver el id de las cookies y poder trabajar más tarde con ellos.
        $id = $_GET['id'];
        
        //cuando queremos borrar una variable de un array, usamos la funcion UNSET
        unset($deseos[$id]);
        setcookie('deseos', serialize($deseos), time() + 60*60*2);

        header('Location: index.php?method=home');

}

// para borrar las cookies, simplemente las "caducamos" poniento como tiempo -1
public function empty(){

        // de esta forma borramos las cookies que hayan en el navegador
        setcookie('deseos', '', time() -1);

        //seguimos en el home, porque no hemos cerrado sesion, y puede que queramos añadir nuevas cookies
        header('Location: index.php?method=home');

}

public function close(){

        //Al cerrar sesion, lo que hacemos es borrar las cookies de deseos, usuario y contraseñas
        // ponemos a todas las cookies con time -1 y las caducamos
        setcookie('deseos', '', time() -1);
        setcookie('user', '', time() -1);
        setcookie('password', '', time() -1);

        //por ultimo, cuando cierre sesion, volvera al menu de iniciar sesion
        header('Location: index.php?method=login');
}

}

?>