<?php

$array1 = array("Audi"=>"Cochabamba", "BMW"=>"Alemania", "Volvo"=>"Paris", "Saab"=>"Rusia");


foreach($array1 as $coche => $pais){
    echo "$coche , $pais <br/>";

}
echo "<br/><br/><br/>";
array_splice($array1, 1, 1);

foreach($array1 as $coche => $pais){
    echo "$coche , $pais <br/>";

}
?>