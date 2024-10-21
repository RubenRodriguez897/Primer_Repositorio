<?php
/* CBTIS 89 
   Programa que almacena datos en un arreglo y posteriormente los imprime
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

   $Fruta = array("Manzana"=> "25", "Mnago"=> "40", "Limón"=> "35", "Naranja"=> "20");
   
   echo "** FRUTERIA DEL SUR **", "<br>", "<br>";
foreach ($Fruta as $Fruta => $Presio) 
	{ echo "El kilo de " . $Fruta . "cuesta " . $Presio;
     echo "<br>","<br>";
	
}
?>