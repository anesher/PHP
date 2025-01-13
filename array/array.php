<?php
$vector = array('dato' => 'Hola', 'dato2'=>'que', 'dato3'=>'haces' );
$menu= array('muy','bien','estoy');
# cont 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= print_r($vector);?></p>
    <p><?= var_dump($menu['2']);?></p>

</body>
</html>

// cont(cuenta),print_r/var_dump, push, unset()