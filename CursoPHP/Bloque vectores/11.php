<?php

$array1 = array("Coche"=>"2", "Escoba"=>"101", "Casa"=>"21", "Mesa"=>"7890", "Sofa"=>"92");

asort($array1);
foreach($array1 as $producto => $precio){
    echo "$producto , $precio € <br/>";

}

?>