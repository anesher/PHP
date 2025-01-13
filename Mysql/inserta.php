<?php
 $mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
 if (mysqli_connect_errno()) {
     // Control
     echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
 }
 //para insertar
 $listcity=mysqli_query($mysqli,"INSERT INTO `city` (`id`,`Name`,`CountryCode`,`District`,`Population`) VALUES (NULL, 'PRUEBA', 'AFG', 'kabul', 0)");
 
 $listCity= mysqli_query($mysqli,"SELECT `Name` FROM `city` WHERE `Name`='PRUEBA' ");

if($listCity!=null){
    foreach($listCity as $objName){
        echo "$objName[Name].<br>";
    }
}

?>