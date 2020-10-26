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
        $method = 'login';
        }
        
        $this->$method();
    }

    public function index(){

    include('index.php');
    
    }

    public function login (){

        if (isset($_COOKIE['user'])) {
            
            //no se puede poner echos antes de ningun header
            //Correcion Rafa, y funciona en windows y linux
            header("location: index.php?method=home");

            return;

          }
      
        include('views/login.php');
                
    }

    public function auth (){

        //creamos las variables y donde queremos guardar los datos del formulario
        $user = $_POST['user'];
        $password = $_POST['password'];

        // para poner una cookie que dure un año se pondria esto (60*60*24*360)
        setcookie("user", "$user" , time() + 3600); //ponemos caducidad a la cookie
        setcookie("password", "$password", time() + 3600);

        header ("location: index.php?method=home");
        
    }

    public function home (){

        if(isset($_COOKIE['user'])){
        echo "Bienvenido " . $_COOKIE['user'];

    }

        include('views/home.php');
    }

    public function logout (){

        $user = $_POST['user'];
        $password = $_POST['password'];

        // vamos a caducar la cookie para que se borre
        setcookie("user", "$user" , time() -1); 
        setcookie("password", "$password", time() -1);

        header("location: ?method=login");
    }


}

?>