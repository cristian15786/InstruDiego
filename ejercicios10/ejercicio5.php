<?php
//5. Ejercicio de primos: Escribe un programa que determine si un numero ingresado por el usuario es primo o no

$numero = readline("Ingrese un número: ");

if (!is_numeric($numero) || $numero < 2 || $numero != intval($numero)) {
    echo "El número ingresado no es válido.";
    exit;
}

$esPrimo = true;
for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
        $esPrimo = false;
        break;
    }
}

if ($esPrimo) {
    echo "El número $numero es primo.";
} else {
    echo "El número $numero no es primo.";
}
?>
