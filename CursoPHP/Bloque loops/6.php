<?php
$numero = rand(2,25);

for($contador = 1; $contador < $numero; $contador ++){
    if($numero % $contador == 0){
        echo "$contador <br/>";
    }


}

?>