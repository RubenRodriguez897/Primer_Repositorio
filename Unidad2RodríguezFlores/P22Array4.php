<?php
/* CBTIS 89 
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

   $equipo = array("portero"=> "Julio", "Defensa"=> "Diego", "Medio"=> "Jair", "Delantero"=> "Rafa");
   
   echo "** SELECCIÓN NACIONAL **", "<br>", "<br>";
foreach ($equipo as $posicion => $jugador) 
	{ echo "El jugador " . $jugador . "es el " . $posicion;
     echo "<br>","<br>";
	
}
?>