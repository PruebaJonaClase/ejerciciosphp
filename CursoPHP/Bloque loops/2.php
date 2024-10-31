<?php
$contador = 0;

while($contador < 20){
    $contador ++;
    $numero = rand(1,6);
    $total += $numero;
    echo "lanzamiento $contador = $numero <br/>";
    
}
echo "el total es $total";
?>