// Dada la calificación de un alumno en la materia de matemáƟcas, determina si aprobó o
reprobó la materia considerando que la calificación aprobatoria debe ser igual o mayor a 6.0

<?php
    $nota=4.2;
    $res='has supendido';
    if($nota>=6.0){
        $res='has aprovado';
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
    <p>Tienes : <?=$nota?> por lo tanto <?=$res?> </p>
</body>
</html>