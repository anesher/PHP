// Realiza un script que controle si el usuario es mayor de edad. (usa la función que genera
un numero aleatorio para conseguir la edad).

<?php
    $numeroAleatorio = rand(1, 100);
    $frase="Usted es menor de edad";
    if($numeroAleatorio>=18){
        $frase= "Usted es mayor de edad";
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
    <p>tu edad es <?=$numeroAleatorio?> por lo tanto <?=$frase?> </p>
</body>
</html>