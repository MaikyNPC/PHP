<?php
$numero = readline("Ingrese el numero:");
if ($numero==0){
    echo "el numero que ingresaste es cero";
}
elseif($numero %2==0){
    echo "el numero es par";
}
elseif($numero <0){
    echo "el numero es negativo";
}
else{
    echo"el numero es impar";
}
?>