<?php

$array1 = array("Pato", "Perro", "Gato", "Cabra", "Zebra");

for($contador = 0; $contador < 10; $contador ++){
   echo "$array1[$contador] <br/>";

}
echo "cambio el animal en el puesto 3 <br/><br/><br/>";
$array1[2] = "Leon";

for($contador = 0; $contador < 10; $contador ++){
    echo "$array1[$contador] <br/>";
 
 }
?>