<?php

//6. Ejercicio de reverso: Escribe un programa que invierta un numero ingresado por el usuario. Por ejemplo, si el usuario ingresa "12345", el programa debe mostrar "54321".

$numero = readline("Ingrese un número: ");

$numeroInvertido = '';
$longitud = strlen($numero);

for ($i = $longitud - 1; $i >= 0; $i--) {
    $numeroInvertido .= $numero[$i];
}

echo "El número invertido es: " . $numeroInvertido;
?>
