<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar nombre y apellido
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    
    // Mensaje de bienvenida
    echo "Bienvenido, " . $nombre . " " . $apellido . "<br>";

    // Nombre y apellido al revés
    echo "Nombre al revés: " . strrev($nombre) . "<br>";
    echo "Apellido al revés: " . strrev($apellido) . "<br>";

    // Contar letras
    $letrasNombre = strlen($nombre);
    $letrasApellido = strlen($apellido);
    $totalLetras = $letrasNombre + $letrasApellido;
    echo "Letras en el nombre: " . $letrasNombre . "<br>";
    echo "Letras en el apellido: " . $letrasApellido . "<br>";
    echo "Total de letras: " . $totalLetras . "<br>";

    // Nombre y apellido en mayúsculas
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";

    // Primer y último carácter
    echo "Primer carácter del nombre: " . $nombre[0] . "<br>";
    echo "Último carácter del nombre: " . $nombre[$letrasNombre - 1] . "<br>";
    echo "Primer carácter del apellido: " . $apellido[0] . "<br>";
    echo "Último carácter del apellido: " . $apellido[$letrasApellido - 1] . "<br>";

    // Cambiar vocales por 'u'
    $nombreModificado = preg_replace('/[aeiouAEIOU]/', 'u', $nombre);
    $apellidoModificado = preg_replace('/[aeiouAEIOU]/', 'u', $apellido);
    echo "Nombre con vocales cambiadas: " . $nombreModificado . "<br>";
    echo "Apellido con vocales cambiadas: " . $apellidoModificado . "<br>";

    // Procesar números
    $numero1 = htmlspecialchars($_POST['numero1']);
    $numero2 = htmlspecialchars($_POST['numero2']);
    
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $suma = $numero1 + $numero2;
        $diferencia = $numero1 - $numero2;
        $cociente = $numero2 != 0 ? $numero1 / $numero2 : 'Infinito';
        $producto = $numero1 * $numero2;

        echo "Suma: " . $suma . "<br>";
        echo "Diferencia: " . $diferencia . "<br>";
        echo "Cociente: " . $cociente . "<br>";
        echo "Producto: " . $producto . "<br>";
    } else {
        echo "Por favor, introduce números válidos.<br>";
    }
}
?>
