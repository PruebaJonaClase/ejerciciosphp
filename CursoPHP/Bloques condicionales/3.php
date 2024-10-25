<?php
$n1 = rand(0, 200);
$n2 = rand(0, 200);
$n3 = rand(0, 200);

 

echo "el primer numero es $n1 <br/>";
echo "el segundo numero es $n2 <br/>";
echo "el tercer numero es $n3 <br/>";

if($n1>=$n2&&$n1>=$n3){
    echo "$n1<br/>";
    if($n2>=$n3){
        echo "$n2<br/>$n3";
    }
    else{
        echo "$n3<br/>$n2";
    }

}
elseif($n2>=$n1&&$n2>=$n3){
    echo "$n2<br/>";
    if($n1>=$n3){
        echo "$n1<br/>$n3";
    }
    else{
        echo "$n3<br/>$n1";
    }
}
elseif($n3>=$n1&&$n3>=$n2){
    echo "$n3<br/>";
    if($n1>=$n2){
        echo "$n1<br/>$n2";
    }
    else{
        echo "$n2<br/>$n1";
    }
}

?>