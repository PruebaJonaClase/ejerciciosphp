<?php
$numero = rand (1,30);

$primo = [];
for($contador = 1; $contador <= $numero; $contador ++){
    if($numero % $contador == 0){
        //echo "$contador <br/>";
        $primo[] = $contador;
    }
}
echo "$numero <br/>";
if(count($primo) == 2){
    echo "es un numero primo";

}
else{
    echo "no es un numero primo";
}


?>