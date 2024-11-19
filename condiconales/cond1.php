<?php
    /*Determies mayor o menor de edad conar si una persona n if/else en php. En caso de ser
    verdadero vamos a imprimir la cadena “Es mayor de edad”, en caso contrario imprimimos la cadena
    “Es menor de edad”*/

    $edad=18;
    $res='eres menor de edad';
    if($edad>=18){
        $res='eres mayor de edad';
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
    <h2> Determies mayor o menor de edad conar si una persona n if/else en php. En caso de ser
    verdadero vamos a imprimir la cadena “Es mayor de edad”, en caso contrario imprimimos la cadena
    “Es menor de edad”</h2>
    <p>Tienes : <?=$edad?> por lo tanto eres <?= $res?> </p>
</body>
</html>