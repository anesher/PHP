// Controla la edad cada 10 años, desde los 0 hasta los 100. Muestra un mensaje indicando
en qué intervalo está el usuario. UƟliza la estructura de control correcta.

<?php

$edad = 0; 
$mensaje = ""; 


for ($i = 0; $i <= 100; $i += 10) {
    if ($edad >= $i && $edad < $i + 10) {
        $mensaje = "El usuario está en el intervalo de {$i} a " . ($i + 9) . " años.";
        break; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$mensaje?></p>
</body>
</html>