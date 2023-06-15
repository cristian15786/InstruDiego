<?php

//1. ejercicio de suma y promedio: escribe un programa que solicite al usuario ingresar una lista de numeros y luego calcule la suma y el promedio de esos numeros

$numeros = readline("Ingrese una lista de números: ");

$numeros = explode(" ", $numeros);

$sum = 0;
$contador = 0;

foreach ($numeros as $numero) {
    $sum += $numero;
    $contador++;
}

$promedio = $sum / $contador;

echo "La suma es: " . $sum . "\n";
echo "El promedio es: " . $promedio . "\n";
?>
