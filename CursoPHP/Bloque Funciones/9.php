<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function esContrasenaValida($contrasena) {
    if (strlen($contrasena) < 8) {
        return false;
    }
    
    if (!preg_match('/[A-Z]/', $contrasena)) {
        return false;
    }

    if (!preg_match('/[a-z]/', $contrasena)) {
        return false;
    }

    if (!preg_match('/\D/', $contrasena)) {  // \D significa que no es un número
        return false;
    }

    return true;
}

echo esContrasenaValida('Contraseña123') ? 'Contraseña válida' : 'Contraseña no válida';
?>


</body>
</html>