<?php
/* CBTIS 89 
   P40Array20.php
   Programa que almacena el nombre de cuatro artìculos en un arreglo llamado
   $Productos y en otro arreglo multidimensiona llamado $Precio almacena los precios
   correspondiente de 3 meses, esto se hace por medio de filas y columnas.
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

$Productos = array("Vestido", "Pantalòn", "Cinturòn", "Camiseta");
$Precios = array(500, 400, 500);
$PreciosP = array(600, 690, 950);
$PreciosC = array(100, 400, 300);
$PreciosCa = array(500, 600, 550);
$Subtotal = array();
$Promedio = array();

 // Llenar el arreglo $Productos con los valores de las 4 compras
for ($i = 0; $i < 4; $i++) {

$Subtotal[$i] = $Precios[$i] + $PreciosP[$i] + $PreciosC[$i] + $PreciosCa[$i];
$Promedio[$i] = $Subtotal[$i] / 3;
}

echo "TIENDA DE ROPA";
echo "<br>";
echo "Productos","Subtotal","Promedio"."<br>";
for ($i=0;$i<4;$i++)
        {echo $Productos[$i]."-----". $Subtotal[$i]."-----". $Promedio[$i]."<br>";}

echo "<br>";
echo "Precios"."<br>";
for ($i=0;$i<3;$i++)
        {echo $Precios[$i]."-----". $PreciosP[$i]."-----". $PreciosC[$i]."-----". $PreciosCa[$i]."<br>";}
?>