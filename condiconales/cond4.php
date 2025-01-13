// Bucles anidados, muestra los números de piso y de puerta de un bloque. Por ejemplo:
Piso 1 – puerta 1 Piso 1 –puerta 2 … así hasta llegar al Piso 5 – puerta 4.

<?php
    $frasePl = "";
    $frasePu = "";

    for ($i=1;$i>5;$i++){
        $frasePl= "Planta".$i. " ";
            for($f=1;$f>4;$f++){
                $frasePu="Puerta".$f;
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
    <p>Planta : <?=$frasePl?> y la Puerta <?=$frasePu?> </p>
</body>
</html>