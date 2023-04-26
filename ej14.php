<?php
 

$distancia_metros = floatval(readline("Ingrese una distancia en metros: "));

$distancia_km = $distancia_metros / 1000;

$distancia_cm = $distancia_metros * 100;

$distancia_mm = $distancia_metros * 1000;

echo "La distancia ingresada es de " . $distancia_metros . " metros.\n";
echo "Equivale a:\n";
echo "- " . number_format($distancia_km, 2) . " kilómetros.\n";
echo "- " . number_format($distancia_cm, 2) . " centímetros.\n";
echo "- " . number_format($distancia_mm, 2) . " milímetros.\n";
?>