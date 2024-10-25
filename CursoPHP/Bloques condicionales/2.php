<?php
$n1 = rand(0, 20);
$n2 = rand(0, 20);
echo "el primer numero es $n1 <br/>";
echo "el segundo numero es $n2 <br/>";

if($n1>$n2){
    echo "el primer numero es mayor que el segundo";
}
elseif($n1<$n2){
    echo "el primer numero es menor que el segundo";
}
else{
    echo "son iguales";
}
?>