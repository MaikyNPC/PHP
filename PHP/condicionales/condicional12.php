<?php
// Leemos la cantidad de artículos del usuario
echo "Ingrese la cantidad de artículos que desea comprar: ";
$cantidad = readline();

// Convertimos la entrada a un número
$cantidad = intval($cantidad);

// Leemos el precio unitario original del usuario
echo "Ingrese el precio unitario original: ";
$precio_unitario = readline();

// Convertimos la entrada a un número
$precio_unitario = intval($precio_unitario);

// Calculamos el descuento según la cantidad de artículos comprados
if ($cantidad > 5 && $cantidad < 10) {
  $descuento = 0.05;
} elseif ($cantidad >= 10) {
  $descuento = 0.08;
} else {
  $descuento = 0;
}

// Calculamos el precio unitario con el descuento aplicado
$precio_unitario_descuento = $precio_unitario - ($precio_unitario * $descuento);

// Calculamos el valor total a pagar
$valor_total = $precio_unitario_descuento * $cantidad;

// Imprimimos el valor total a pagar
echo "El valor total a pagar es: $" . number_format($valor_total) . "\n";
?>


