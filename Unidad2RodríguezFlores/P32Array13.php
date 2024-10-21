<?php
/* CBTIS 89 
   Programa que ordena la ropa ascendente y descendete
   Ruben Rodríguez Flores
   3ºA Programación Matutino
   */

$arrayropa = array("Camisa", "Pantalon", "Cinturon");

// Orden ascendente
sort($arrayropa);
echo "<h3>Orden Ascendente:</h3>";
var_export($arrayropa);

echo "<p>";

// Orden descendente
rsort($arrayropa);
echo "<h3>Orden Descendente:</h3>";
var_export($arrayropa);
?> 