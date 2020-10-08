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
    // calculamos los 10.000 primeros numeros primos
    for ($numero= 1; $numero <= 10000; $numero++){
      //resteamos el contador a cero.
		  $contador= 0;
		  for ($i=1; $i <=$numero; $i++){
        //si el resto da cero, se puede dividir entre si mismo y es primo
		  	if ($numero % $i== 0){
				$contador++;
        }
      }
      
		if ($contador== 2 || $contador== 1) {
			echo "$numero: es primo"."<br>";
        }
        else{
				echo "$numero: no es primo"."<br>";
        }
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