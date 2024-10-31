<?php

$array1 = array("Azul", "Rojo", "Negro", "Amarillo", "Rosa");

for($contador = 0; $contador < 10; $contador ++){
   echo "$array1[$contador] <br/>";

}
array_splice($array1, 1, 1);

for($contador = 0; $contador < 10; $contador ++){
    echo "$array1[$contador] <br/>";
 
 }
?>