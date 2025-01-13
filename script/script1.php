<?php
$nombre='Antonio Eslava';
$apellido='Hernández';
$edad=22;
$isFeminino=false;
$nacimiento='nacido en almodovar';
$ayoDenacimiento=2002;
$dinero=0.00;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
</head>
<body>
    <h1>mi nombre es <?=$nombre.' '.$apellido;?>  </h1>
    <p> edad : <?php echo $edad;?> </p>
    <p> mujer : <?php echo $isFeminino; ?> </p>
    <p> nacimiento : <?php echo $nacimiento;?> </p>
    <p> ayo nacimiento : <?php echo $ayoDenacimiento;?> </p>
    <p>Dinero : <?=$dinero;?></p>
</body>
</html> 
