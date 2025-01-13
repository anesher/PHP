Leer 10 enteros harcodeados en un array y mostrar la media de los valores negativos y la de los
positivos. 

<?php
    $numeros=array(1,-2,4,4,-5,8,7,-7,-5,7);
    $positivos= 'cantidad positivos : 6 ';
    $negativos=' cantidad negativos : 4 ';
    $ceros='ceros : 0 ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= print_r($numeros)?></p>
    <p> <?= $positivos?></p>
    <p><?= $negativos?></p>
    <p><?= $ceros?></p>
</body>
</html>