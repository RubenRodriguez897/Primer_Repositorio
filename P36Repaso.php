<?php
/* CBTIS 89 
   Programa que almacena cinco calificiones de los alumnos de prepa y 
   sacar el promedio, para ver si aprendieron o no
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */
   
  // Almacena datos en un arreglo asociativo
$estudiantes = array(
    "Juan" => 85,
    "Ana" => 92,
    "Luis" => 78,
    "Marta" => 88,
    "Pedro" => 95
);

// Calcular el promedio de las calificaciones
$total_calificaciones = 0;
$cantidad_estudiantes = count($estudiantes);

foreach ($estudiantes as $nombre => $calificacion) {
    $total_calificaciones += $calificacion;
}

$promedio = $total_calificaciones / $cantidad_estudiantes;

// Mostrar resultados
echo "Calificaciones de los estudiantes:<br>";
foreach ($estudiantes as $nombre => $calificacion) {
    echo "$nombre: $calificacion<br>";
}

echo "<br>El promedio de calificaciones es: " . round($promedio, 2) . "<br>";

?>