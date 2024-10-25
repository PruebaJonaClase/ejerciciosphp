<?php
$n1 = rand(1, 7);

echo "el numero es $n1 <br/>";

if($n1==1){
    echo "es lunes";
}
elseif($n1==2){
    echo "es martes";
}
elseif($n1==3){
    echo "es miercoles";
}
elseif($n1==4){
    echo "es jueves";
}
elseif($n1==5){
    echo "es viernes";
}
elseif($n1==6){
    echo "es sabado";
}
else{
    echo "es domingo";
}
?>