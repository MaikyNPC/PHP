<?php

$salario_diario = floatval(readline("Ingrese el salario diario: "));
$dias_trabajados = intval(readline("Ingrese el número de días trabajados: "));

$salario_bruto = $salario_diario * $dias_trabajados;
$descuento_pension = $salario_bruto * 0.1;
$descuento_salud = $salario_bruto * 0.15;

$salario_neto = $salario_bruto - $descuento_pension - $descuento_salud;

echo "El salario neto a pagar es: $" . number_format($salario_neto, 2) . "\n";

?>