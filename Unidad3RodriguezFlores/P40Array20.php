<?php
/* CBTIS 89 
   P40Array20.php
   Programa que almacena por medio de un ciclo
   los nùmeros del 150 al 200 de la siguiente
   manera:
   En el $Arreglo1 van los nùmeros pares, en el 
   $Arreglo2 van los nùmeros impares, en el 
   $Arreglo3 va la suma de los nùmeros
   correspondiente al mismo ìndice.
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
   
  // Datos iniciales
$Arreglo1 = array(); // Arreglo para los números pares
$Arreglo2 = array(); // Arreglo para los números impares
$Arreglo3 = array(); // Arreglo para la suma de los números correspondientes

 

// Rango de números entre 150 y 200
for ($i = 150; $i <= 201; $i++) {
    if ($i % 2 == 0) {
        // Si es par, lo agregamos a Arreglo1
        $Arreglo1[] = $i;
        
    } else {
        // Si es impar, lo agregamos a Arreglo2
        $Arreglo2[] = $i;
    }
}

 for ($i=0;$i<50;$i++) { 
 $Arreglo3 = $Arreglo1 + $Arreglo2;
}

echo "<br>";
echo "Arreglo1", "Arreglo2", "Arreglo3"."<br>";
for ($i=0;$i<50;$i++)
        {echo $Arreglo1[$i]."-----". $Arreglo2[$i]."-----". $Arreglo3[$i], "<br>";}
?>