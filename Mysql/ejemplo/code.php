<?php

// Intento de conexion a la base de datos
$mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
if (mysqli_connect_errno()) {
    // Control
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}
 
$listCode=mysqli_query($mysqli, "SELECT `Code` FROM  `country` ORDER BY Name ASC");
if($listCode != null){
    foreach($listCode as $objCountry){
        echo "$objCountry[Code]<br>";
    }
}else{
    echo "Nos hemos encontrado ningun registro para la consulta ejecutada.";
}
?>