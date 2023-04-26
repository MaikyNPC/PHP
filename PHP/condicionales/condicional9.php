<?php
// Leemos la cantidad de la cuenta
echo "Ingrese el valor de la cuenta: ";
$cuenta = readline();

// Convertimos la entrada a un número
$cuenta = floatval($cuenta);

// Verificamos qué método de pago usar
if ($cuenta < 150000) {
  echo "El pago se realizará en efectivo.";
} elseif ($cuenta <= 300000) {
  echo "El pago se realizará con el celular (dinero electrónico).";
} elseif ($cuenta <= 600000) {
  echo "El pago se realizará con la tarjeta de débito.";
} else {
  echo "El pago se realizará con la tarjeta de crédito.";
}
?>

