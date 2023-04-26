<?php

$altura = readline("Ingrese su altura en metros: ");
$peso = readline("Ingrese su peso en Kg: ");


$Imc = $peso / ($altura * $altura);

  if ($Imc < 18.5) {
    echo "Su IMC es $Imc y está Desnutrido\n";
  } 
  elseif ($Imc >= 18.5 && $imc < 25) {
    echo "Su IMC es $Imc y está Normal\n";
  } 
  elseif ($Imc >= 25 && $imc < 30) {
    echo "Su IMC es $Imc y tiene Sobrepeso\n";
  } 
  elseif ($Imc >= 30 && $imc < 35) {
    echo "Su IMC es $Imc y tiene Obesidad Grado 1\n";
  } 
  elseif ($Imc >= 35 && $imc < 40) {
    echo "Su IMC es $Imc y tiene Obesidad Grado 2\n";
  } 
  else {
    echo "Su IMC es $Imc y tiene Obesidad Grado 3\n";
  }

?>
