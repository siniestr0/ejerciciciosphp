<?php
class App
{

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

  public function fibonacci(){

    $valor1= 0;
    $valor2= 1;
    $suma=0;
//calculamos que el fin de la secuencia sea hasta SUMA y que no pase del millón.
    for ($i=0; $suma <= 1000000 ; $i++) {
    // creamos el array fibonacci[] y guardará los valores del bucle.
                
    $suma = $valor1 + $valor2;
    $valor1 = $valor2;
    $valor2 = $suma;
    $fibonacci[]= $valor1;
           
      }
    // ponemos el link donde queremos guardar los datos de la secuencia
    include('views/fibonacci.php');
}  

  public function primos(){

$numero = $_GET['numero'];
$i = 2;
$primo = true;

while ( $primo && $i < $numero){
  $primo = ($numero %$i) != 0;
  $i ++;

}

if ($primo){

  echo "El numero $numero es primo";
}

else {
  echo "El numero $numero no es primo";

}

    include('views/primos.php');
  }

  public function factorial(){
 
    include('views/factorial.php');
  }

  public function potencias2(){

    include('views/potencias.php');
  }


    } 
?>