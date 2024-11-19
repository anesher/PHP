// Crea un array con cinco nombres de persona e imprímelo posteriormente en pantalla mostrando el
// texto “Conozco a alguien llamado”. 

<?php
    $conoc='Conozco a alguien llamado ';
    $nombre=array('antonio','maria','irene','miguel', 'pedro');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- se utiliza el punto para concanectar dos cosas son el-->
    <p> <?=$conoc . $nombre[0] ?> </p>
    <p> <?=$conoc . $nombre[1] ?> </p>
    <p> <?=$conoc . $nombre[2] ?> </p>
    <p> <?=$conoc . $nombre[3] ?> </p>
    <p> <?=$conoc . $nombre[4] ?> </p>
</body>
</html>