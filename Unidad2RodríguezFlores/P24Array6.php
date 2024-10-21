<?php
/* CBTIS 89 
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

   $Prepa = array("Juan"=> "89", "Daniela"=> "130", "Salvador"=> "110", "Sebastian"=> "89");
   
   echo "** PREPAS  **", "<br>", "<br>";
foreach ($Prepa as $Prepa => $Especialidad) 
	{ echo "El alumno " . $Prepa . " esta en la Prepa " . $Especialidad;
     echo "<br>","<br>";
	
}
?>