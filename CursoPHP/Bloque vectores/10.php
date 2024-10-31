<?php

$array1 = array("Luis"=>"2€", "Paco"=>"101€", "Pedro"=>"21€", "Marco"=>"7890€", "Adrian"=>"92€");

ksort($array1);
foreach($array1 as $nombre => $sueldo){
    echo "$nombre , $sueldo <br/>";

}

?>