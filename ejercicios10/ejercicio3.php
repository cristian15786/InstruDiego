<?php

//3. Ejercicio de factorial: Escribe un programa que calcule el factorial de un numero ingresado por el usuario

$numero = readline("Ingrese un número: ");

$factorial = 1;
for ($i = 2; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es: $factorial";
?>
