<?php
/* CBTIS 89 
   Programa que diga nombres alazar
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
 echo "Datos del arreglo ordenados de forma ascendente por medio de un ciclo for";
 echo "<br>";
 $nombre = "Anna";
 $nombre2 = "Rafa";
 $nombre3 = "Raul";
 $nombre4 = "Fernando";
 $nombre5 = "Laura";
 $nombre6 = "Sebastian";
 
   $array = array($nombre, $nombre2, $nombre3, $nombre4, $nombre5, $nombre6);

   //Se obtiene el número de elementos 
   $longitud = count($array);

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++){ 
      //Se obtiene el valor de cada elemento 
      echo $array[$i]; 
     echo "<br>";
   }
 echo "Posteriomente se agregaron cuatro datos y se eliminaron dos";
 echo "<br>","<br>";

 echo "Datos del arreglo ordenados de forma descendentes por medio de un ciclo for";
 echo "<br>";

 $nombre = "Jose";
 $nombre2 = "Rafa";
 $nombre3 = "Kevin";
 $nombre4 = "Fernando";
 $nombre5 = "Laura";
 $nombre6 = "Sebastian";
 $nombre7 = "Daniel";
$nombre8 = "Cesar";

   $array = array($nombre, $nombre2, $nombre3, $nombre4, $nombre5, $nombre6, $nombre7, $nombre8);

 //Se obtiene el número de elementos 
   $longitud = count($array);

   //Recorre todos los elementos 
   for($i=0; $i<$longitud; $i++){ 
      //Se obtiene el valor de cada elemento 
      echo $array[$i]; 
      echo "<br>";

   }
   echo "El numero de elementos actual en el arreglo es de: 8";
?> 