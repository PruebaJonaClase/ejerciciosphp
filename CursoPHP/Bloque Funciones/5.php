<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function generarContrasena() {
    $longitud = rand(8, 12);  // Longitud aleatoria entre 8 y 12 caracteres
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%&-';
    $contrasena = '';
    
    // Al menos un carácter especial
    $caracteresEspeciales = '@#$%&-';
    $contrasena .= $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];
    
    // Completar la contraseña con caracteres aleatorios
    for ($i = 1; $i < $longitud; $i++) {
        $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return str_shuffle($contrasena);  // Mezcla los caracteres
}

echo generarContrasena();
?>


</body>
</html>