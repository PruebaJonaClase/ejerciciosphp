<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function calcularRectangulo($largo, $ancho) {
    $area = $largo * $ancho;
    $perimetro = 2 * ($largo + $ancho);

    return [
        'area' => $area,
        'perimetro' => $perimetro
    ];
}

$resultado = calcularRectangulo(5, 10);  // Ejemplo
echo "Área: " . $resultado['area'] . "<br>";
echo "Perímetro: " . $resultado['perimetro'];
?>


</body>
</html>
