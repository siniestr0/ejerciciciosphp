<?php

class App
{

//Atributos publicos
public $user;
public $password;

    public function __construct($user, $password){
        
    $this->name = $user;
    $this->password = $password;

    }

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


    }
}

?>