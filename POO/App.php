<?php
class App
{

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
    
    $this->$method();
  }

public function index(){

  echo "enlaces a los 4 archivos";
  
  include('views/index.php');

}

  public function fibonacci(){

    $valor1= 0;
    $valor2= 1;

  for ($i=0; $i <= 1000 ; $i++) {
    
      $fibonacci[]= $valor1;
      $suma = $valor1 + $valor2;
      $valor1 = $valor2;
      $valor2 = $suma;
    } 
    // ponemos el link donde queremos guardar los datos de la secuencia
    include('views/fibonacci.php');
}  

  public function primos(){


  }

  public function factorial(){

    
  }

  public function potencias(){

    
  }


    } 
?>