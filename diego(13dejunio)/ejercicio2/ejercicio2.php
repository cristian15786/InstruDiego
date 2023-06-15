<?php
$num= readline ("por favor ingrese un numero para sacar el fiboracci");
$y=1;
$acum=0;
for($x=0;$x<=$num;$x+0){
    echo $acum." "; 
    $acum=$x+$y;
    $y=$x
    $x= $acum;
}

?>