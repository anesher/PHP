<?php
 $mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
    if (mysqli_connect_errno()) {
        // Control
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }

    $listCity=mysqli_query($mysqli,"DELETE FROM `city` WHERE `Name`='PRUEBA2'");
    $listCity= mysqli_query($mysqli,"SELECT `Name` FROM `city` WHERE `Name`='PRUEBA2' ");

    if($listCity!=null){
        foreach($listCity as $objName){
            echo "$objName[Name].<br>";
        }
    }
?>