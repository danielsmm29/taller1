<?php

//Ejercicio
/* 1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión: */

echo("Taller 1 elaborado por Daniel Martinez<br>");
echo("Punto 1");

$numero1 = 500;
$numero2 = 1000;



$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);
echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);
echo("<br>La multiplicacion de:".$numero1."*".$numero2."=".$multiplicacion);
echo("<br>La division de:".$numero1."/".$numero2."=".$division);
?>