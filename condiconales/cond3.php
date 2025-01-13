// De dos números dados saber si son iguales, mayor o menor

<?php
    $num1=8;
    $num2=6;
    /*$res='son iguales';
    if($num1>$num2){
        $res='el numero 1 es mayor';
    }else if($num1<$num2){
        $res='el numero 2 es mayor';
    }*/

    switch($num1){
        case ($num1>$num2):
            $res='el numero 1 es mayor';
            break;
        case ($num1<$num2):
             $res='el numero 2 es mayor';
            break;
        default:
        $res='es igual';
        break;
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
    <p>Numero 1: <?=$num1?></p>
    <p>Numero 2: <?=$num2?></p>
    <p>Por lo tanto : <?=$res?></p>
</body>
</html>
