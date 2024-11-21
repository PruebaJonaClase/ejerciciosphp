<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function calcularPromedioYMediana($numeros) {
    $promedio = array_sum($numeros) / count($numeros);
    
    sort($numeros);
    $cantidad = count($numeros);
    $mediana = ($cantidad % 2 == 0) ? 
        ($numeros[$cantidad / 2 - 1] + $numeros[$cantidad / 2]) / 2 : 
        $numeros[floor($cantidad / 2)];

    return [
        'promedio' => $promedio,
        'mediana' => $mediana
    ];
}

$resultado = calcularPromedioYMediana([1, 2, 3, 4, 5, 6, 7, 8]);
echo "Promedio: " . $resultado['promedio'] . "<br>";
echo "Mediana: " . $resultado['mediana'];
?>


</body>
</html>