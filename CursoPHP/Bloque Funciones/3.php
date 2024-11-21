<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function convertirTemperatura($temperatura, $escala) {
    if ($escala == 'C') {
        return ($temperatura * 9/5) + 32;  // Celsius a Fahrenheit
    } elseif ($escala == 'F') {
        return ($temperatura - 32) * 5/9;  // Fahrenheit a Celsius
    } else {
        return "Escala no válida";
    }
}

echo convertirTemperatura(25, 'C') . "°F<br>";  // 25°C a °F
echo convertirTemperatura(77, 'F') . "°C";      // 77°F a °C
?>


</body>
</html>