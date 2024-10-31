<?php
$contador = 0;
$numero = rand(1,6);

while($contador < 10){
    $contador ++;
    $total = $numero * $contador;
    echo "$numero * $contador = $total <br/>";
    
}
?>