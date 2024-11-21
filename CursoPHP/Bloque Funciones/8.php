<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function numeroMasFrecuente() {
    $numeros = func_get_args();  // Recibe un número variable de parámetros
    $frecuencia = array_count_values($numeros);
    arsort($frecuencia);
    
    return key($frecuencia);  // Devuelve el número más frecuente
}

echo numeroMasFrecuente(1, 2, 3, 2, 3, 3, 4, 5, 5, 5, 3);  // 3 es el más frecuente
?>


</body>
</html>