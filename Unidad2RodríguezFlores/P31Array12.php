<?php
/* CBTIS 89 
   Programa que orden ascendente y descendente desde el 1 al 6
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
<?php
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>