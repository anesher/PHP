<?php
$mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
if (mysqli_connect_errno()) {
    // Control
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}
$listname=mysqli_query($mysqli,"SELECT `name` FROM `country` ORDER BY Name ASC");

if($listname != null){
    foreach($listname as $objCountry){
        echo "$objCountry[name]<br>";
    }
} else {
    echo "No hemos encontrado ningun registro";
}
mysqli_close($mysqli);
?>