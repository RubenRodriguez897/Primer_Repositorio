<?php
/* CBTIS 89 
   Programa que cuente los numeros pares del 1 al 100
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

   $numeros = array();
   for ($i=1; $i<=100; $i++){
      $numeros[]= $i;  
       }
       echo "PARES"
foreach ($numeros as $numero) {
   if ($numero%2==0) 
      echo $numero . " ";
      echo "<br>";  
  
}

?>