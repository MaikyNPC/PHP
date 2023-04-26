<?php
$velocidad = readline("Introduce la velocidad en Km/h: ");
$tiempo = readline("Introduce el tiempo en horas: ");

$distancia = $velocidad * $tiempo;

echo "La distancia recorrida es: $distancia Km";
?>