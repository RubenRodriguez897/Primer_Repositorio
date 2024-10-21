<?php
/* CBTIS 89 
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
  $nombre = "Anna";
  $array = array(1, 2, 3, "casa", $nombre);

  //Se obtiene el número de los elementos
  $longitud = count($array);

  //Recorre todos los elementos
  for($i=0; $i<5; $i++)
  { //Se obtiene el valor de cada elemento
  	echo $array[$i];
    echo "<br>";
  }
  ?>