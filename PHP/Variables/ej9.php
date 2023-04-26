<?php

$valor_unitario = floatval(readline("Ingrese el valor unitario del producto: "));
$cantidad = intval(readline("Ingrese la cantidad de productos comprados: "));

$subtotal = $valor_unitario * $cantidad;
$iva = $subtotal * 0.16;
$total = $subtotal + $iva;

echo "El valor a pagar es: $" . number_format($total, 2) . "\n";
?>