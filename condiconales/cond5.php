// Usando la función que genera un numero aleatorio realiza un script que controle si una
persona está en edad de trabajar o no, recuerda que la edad laboral es de los 16 a los 65 años.
Mostrará por pantalla “El usuario está en edad laboral” o por el contrario “El usuario NO está en
edad laboral”.

<?php
    $numeroAleatorio = rand(1, 100);
    $frase="El usuario NO está en
        edad laboral";
    if($numeroAleatorio>=16 && $numeroAleatorio<=65){
        $frase= "El usuario está en edad laboral";
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