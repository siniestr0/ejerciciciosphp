<?php

class App
{

//Atributos publicos
public $user;
public $password;

    public function run(){

        if (isset($_GET['method'])) {
        $method = $_GET['method'];
        } else {
        // por defecto cargará el metodo index, y cargará todo lo que haya en ese metodo.
        $method = 'index';
        }
        
        $this->$method();
    }

    public function index(){

    echo "enlaces a los 4 archivos";
    // index.php tiene unos enlaces para ver los resultados de todas las funciones.
    include('views/index.php');

    }

    public function login (){
          
        if (isset($_COOKIE['user'])) {
            echo $_COOKIE['user'] . " Ya estás registrado";
        }

        include('views/login.php');
    }

    public function auth (){

        //creamos las variables y donde queremos guardar los datos del formulario
        $name = $_POST['user'];
        $password = $_POST['password'];

        // para poner una cookie que dure un año se pondria esto (60*60*24*360)
        setcookie("user", "$name" , time() + 3600); //ponemos caducidad a la cookie
        setcookie("password", "$password", time() + 3600);

        
        header ("location: http://ejercicios.local/Login/index.php?method=home");
        include('views/auth.php');
    }

    public function home (){

        if(isset($_COOKIE['user'])){
        echo "Bienvenido " . $_COOKIE['user'];

    }

        include('views/home.php');
    }

    public function logout (){

        $name = $_POST['name'];
        $password = $_POST['password'];

        // vamos a caducar la cookie para que se borre
        setcookie("user", "$name" , time() -1); 
        setcookie("password", "$password", time() -1);

        if(isset($_COOKIE)){
            echo "No se ha borrado la cookie";

        }else{
            echo "Se ha borrado la cookie";
        }

        header("location: http://ejercicios.local/Login/index.php?method=logout");
    }


}

?>