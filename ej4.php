<?php
$anioActual = date('Y'); // Obtener el año actual
$anioNacimiento = readline("Introduce tu año de nacimiento: "); // Solicitar el año de nacimiento al usuario

$edad = $anioActual - $anioNacimiento; // Calcular la edad

echo "Tu edad es: $edad años";
?>