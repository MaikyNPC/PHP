<?php
// Leemos el tamaño de la pizza del usuario
echo "Ingrese el tamaño de la pizza (1, 2 o 3): ";
$tamano = readline();

// Convertimos la entrada a un número
$tamano = intval($tamano);

// Leemos el número de ingredientes adicionales del usuario
echo "Ingrese el número de ingredientes adicionales: ";
$num_ingredientes = readline();

// Convertimos la entrada a un número
$num_ingredientes = intval($num_ingredientes);

// Calculamos el precio base de la pizza
if ($tamano == 1) {
  $precio_base = 15000;
} elseif ($tamano == 2) {
  $precio_base = 24000;
} else {
  $precio_base = 36000;
}

// Calculamos el precio total de la pizza
$precio_total = $precio_base + ($num_ingredientes * 4000);

// Imprimimos el precio total de la pizza
echo "El precio total de la pizza es: $" . number_format($precio_total) . "\n";
?>
