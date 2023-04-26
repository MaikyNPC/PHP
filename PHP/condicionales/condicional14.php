<?php

echo "Ingrese su edad: ";
$edad = readline();

echo "Ingrese su género (1 para femenino, 2 para masculino): ";
$genero = readline();

if ($genero == 1) {
  $pulsaciones = (220 - $edad) / 10;
} elseif ($genero == 2) {
  $pulsaciones = (210 - $edad) / 10;
} else {
  echo "Opción inválida de género.";
  exit();
}

echo "El número de pulsaciones por cada 10 segundos de ejercicio aeróbico es: " . $pulsaciones;

?>

