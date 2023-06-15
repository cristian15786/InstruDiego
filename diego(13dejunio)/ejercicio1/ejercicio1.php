<?php
$cadena= readline ("por favor ingrese una frase palindromo \n");
echo palindromo($cadena);


function palindromo(string $cadena2){

    $cadenainvertida = strrev($cadena2);

    echo "Calculo palindromos \n";

    if (strcmp($cadena2,$cadenainvertida)==0){
        echo "la cadena ". $cadena2. "es palindromo  \n";
    }
    else{
        echo"la cadena". $cadena2." es falsa";
    }
}
    
?>