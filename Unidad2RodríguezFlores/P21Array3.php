<?php
/* CBTIS 89 
   Programa que almacena los nombre de 6 personas en un arreglo y posteriormente los imprime por medio de un ciclo for
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

    $arraynombres = array('Ruben', 'Sebastian', 'Diego', 'Ian', 'Fer', 'Lluvia');

  //Se obtiene el número de los elementos
  $longitud = count($arraynombres);

  //Recorre todos los elementos
  for($i=0; $i<longitud; $i++)
  { //Se obtiene el valor de cada elemento
  	echo $array[$i];
    echo "<br>";
  }
  ?>