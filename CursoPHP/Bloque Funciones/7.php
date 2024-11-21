<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function aplicarDescuento($precio, $descuento) {
    return $precio - ($precio * ($descuento / 100));
}

echo aplicarDescuento(100, 15);  // Ejemplo: 100 con un 15% de descuento
?>


</body>
</html>