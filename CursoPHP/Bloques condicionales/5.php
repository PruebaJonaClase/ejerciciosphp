<?php
$lluvia = rand(0, 1);
$temperatura = rand(-20, 50);

if($temperatura>20 && $lluvia==0){
    echo "la temperatura es $temperatura y no llueve A la playa";
}

elseif($temperatura >-10 && $temperatura<5 && $lluvia==0){
    echo "la temperatura es $temperatura y no llueve A esquiar";
}
elseif($temperatura >5 && $temperatura<20 && $lluvia==0){
    echo "la temperatura es $temperatura y no llueve de paseo";
}
elseif($temperatura >-10 && $temperatura<40 && $lluvia==1){
    echo "hoy llueve y debes quedarte en casa";
}
else{
    echo "La temperatura es $temperatura y es extrema";
}
?>