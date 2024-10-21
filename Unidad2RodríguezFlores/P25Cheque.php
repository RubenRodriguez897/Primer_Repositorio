<?php
/* CBTIS 89 
   Programa que cuente los billetes que son la cantidad
   Ruben Rodríguez Flores
   3ºA Programaciòn Matutino
   */

   $Cheque; $B1000; $B500; $B200; $B100; $B50; $B20; $M10; $M5; $M2; $M1;
   $Cheque=6789;

   $B1000 = floor($Cheque/1000);
   echo "Tienes ". $B1000;
   echo "<br>";
   $B500 = floor($Cheque/500);
   echo "Tiene ". $B500;
   echo "<br>";
   $B200 = floor($Cheque/200);
   echo "Tiene ". $B200;
   echo "<br>";
   $B100 = floor($Cheque/100);
   echo "Tiene ". $B100;
   echo "<br>";
   $B50 = floor($Cheque/50);
   echo "Tiene ". $B50;
   echo "<br>";
   $B20 = floor($Cheque/20);
   echo "Tiene ". $B20;
   echo "<br>";
   $M10 = floor($Cheque/10);
   echo "Tiene ". $M10;
   echo "<br>";
   $M5 = floor($Cheque/5);
    echo "Tiene ". $M5;
   echo "<br>";
   $M2 = floor($Cheque/2);
    echo "Tiene ". $M2;
   echo "<br>";
   $M1 = floor($Cheque/1);
    echo "Tiene ". $M1;
   echo "<br>";
   ?>
   

