<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" src="estilos.css">
</head>
<body>
<p>Texto de ejemplo</p>
<?php

$array1 = array("Coche"=>"2", "Escoba"=>"101", "Casa"=>"21", "Mesa"=>"7890", "Sofa"=>"92");

asort($array1);
echo "<table border=1>";
echo "<tr><th> producto </th><th> precio </th>";
foreach($array1 as $producto => $precio){
    echo "<tr><td>$producto</td> <td>$precio € </td></tr>";
    

}
echo "</table>";
?>
</body>
</html>