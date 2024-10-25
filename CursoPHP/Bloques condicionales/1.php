<?php
$numero = rand(-10, 10);
echo "el numero elegido es $numero <br/>";

if($numero>0){
    echo "es positivo";
}
elseif($numero==0){
    echo "el numero es 0";
}
else{
    echo "es negativo";
}
?>