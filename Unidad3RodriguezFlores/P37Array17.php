<?php
/* CBTIS 89 
   Programa que almacena numeros positivos y negativos, despues que los separe en dos columnas en diferentes
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

// Almacena datos en un arreglo
$arraynumeros = array(-4, 8, 17, -11, -3, 1, 
                      20, -30, 21, 50, -73, 7,
                      -10, -8);

$arraypositivos = array();
$arraynegativos = array();
$suma_positivos = 0;
$suma_negativos = 0;

// Recorrer el arreglo y separar los números positivos y negativos
foreach ($arraynumeros as $numero) {
    if ($numero >= 0) {
        // Si el número es positivo o cero, lo agregamos al arreglo de positivos
        $arraypositivos[] = $numero;
        $suma_positivos += $numero;  // Sumar los positivos
    } else {
        // Si el número es negativo, lo agregamos al arreglo de negativos
        $arraynegativos[] = $numero;
        $suma_negativos += $numero;  // Sumar los negativos
    }
}

// Mostrar los números positivos y su suma
echo "POSITIVOS <br>";
foreach ($arraypositivos as $numero) {
    echo $numero . "<br>";
}
echo "Suma de positivos: " . $suma_positivos . "<br><br>";

// Mostrar los números negativos y su suma
echo "NEGATIVOS <br>";
foreach ($arraynegativos as $numero) {
    echo $numero . "<br>";
}
echo "Suma de negativos: " . $suma_negativos . "<br>";


?>