<?php
// Leemos el número de llantas de la compra
echo "Ingrese el número de llantas: ";
$num_llantas = readline();

// Convertimos la entrada a un número
$num_llantas = intval($num_llantas);

// Calculamos el precio unitario de la llanta
if ($num_llantas < 6) {
  $precio_unitario = 240000;
} elseif ($num_llantas < 8) {
  $precio_unitario = 221000;
} else {
  $precio_unitario = 180000;
}

// Calculamos el precio total de la compra
$precio_total = $num_llantas * $precio_unitario;

// Imprimimos el precio total de la compra
echo "El precio total de la compra es: $" . number_format($precio_total) . "\n";
?>

