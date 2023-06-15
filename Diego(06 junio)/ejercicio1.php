<?php
echo "ingrese una lista de numeros separados por comas ";
$input = trim(fgets(STIDIN))
//aqui en este paso vamos a intentar que la suma se inicialize y 
$numbers = explode (",", $input);
$sum = 0;
$count = count($numbers);
//aqui intentaremos calcular la suma 
foreach ($numbers as $number){
    $sum += $number;
}
//aqui calculamos el promedio 
$average = $sum / $count;
// para mostrar la suma y el promedio hacemos esto 
echo "la suma de los numeros es:". $sum. "/n";
echo "el promedio de los numeros es:".$average "/n"; 

<?