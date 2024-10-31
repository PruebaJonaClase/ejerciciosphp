<?php

$array1 = array("España"=>"Madrid", "Alemania"=>"Berlin", "Italia"=>"Roma", "Francia"=>"Paris", "Afganistan"=>"Kabul");


foreach($array1 as $pais => $capital){
    echo "$pais , $capital <br/>";

}
echo "<br/><br/><br/>";
$array1["España"] = "Budapest";

foreach($array1 as $pais => $capital){
    echo "$pais , $capital <br/>";

}
?>