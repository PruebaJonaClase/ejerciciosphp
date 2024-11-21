<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    $categoria = '';

    if ($imc < 18.5) {
        $categoria = 'Bajo peso';
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = 'Peso normal';
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = 'Sobrepeso';
    } else {
        $categoria = 'Obesidad';
    }

    return [
        'imc' => $imc,
        'categoria' => $categoria
    ];
}

$resultado = calcularIMC(70, 1.75); // Ejemplo
echo "IMC: " . $resultado['imc'] . "<br>";
echo "Categoría: " . $resultado['categoria'];
?>


</body>
</html>
