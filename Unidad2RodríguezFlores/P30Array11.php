<?php
/* CBTIS 89 
   Programa que ordenar de menor a mayor
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
<?php
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>