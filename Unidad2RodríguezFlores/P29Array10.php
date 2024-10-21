<?php
/* CBTIS 89 
   Programa que diga nombres alazar
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

//Crear un array con 8 nombres
$nombres = array("Sebastian", "Diego", "Angel", "Laura", "Rafa", "David", "Kevin", "Byan");

//Buscar nombre
$nombre = "Sebastian";

//Recorrer el array
$encontrado = false; // Variable para verificar sise encuentra el nombre

foreach ($nombres as $n) {
   if ($n == $nombre) {
      echo "Este nombre esta en el Array: $nombre";
                                        $encontrado = true;
                                        break; // Detener el ciclo si el nombre se encuentra 
   }
}

// Si no se encuentra el nombre
if ($encontrado) {
   echo "Este nombre no está en el Array.";
}
?>