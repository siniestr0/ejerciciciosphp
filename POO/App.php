<?php
class App
{

public function run(){

  echo "Bienvenido";
  $this->index();

}


  public function fibonacci(){
    $valor1= 0;
    $valor2= 1;

      for ($i=0; $i <= 10 ; $i++) {
        echo $valor1 . "<br>";
          $suma = $valor1 + $valor2;
          $valor1 = $valor2;
          $valor2 = $suma;

        } 

    } 
}

?>