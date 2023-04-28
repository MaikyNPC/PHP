<?php
echo "Ingrese el número de llantas: ";
$num_llantas = readline();


$num_llantas = intval($num_llantas);

if ($num_llantas < 6) {
  $precio_unitario = 240000;
} elseif ($num_llantas < 8) {
  $precio_unitario = 221000;
} else {
  $precio_unitario = 180000;
}

$precio_total = $num_llantas * $precio_unitario;

echo "El precio total de la compra es: $" . number_format($precio_total) . "\n";
?>

