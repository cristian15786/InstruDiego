<?php
$semana=readline("Ingrese un numero de acuerdo al dia de la semana:");
$resultado= match($semana){
    '1' => "Lunes",
    '2' =>"Martes",
    '3'=> "Miercoles",
    '4'=> "Jueves",
    '5'=> "Viernes",
    '6'=> "Sabado",
    '7'=>"Domingo",
    default =>'ese número esta dentro rango'
};
echo $resultado;
?>