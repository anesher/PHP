<?php
    $mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
    if (mysqli_connect_errno()) {
        // Control
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }
   
    $listCity= mysqli_query($mysqli,"SELECT `Continent` FROM `country` ORDER BY Name ASC");
    
    if($listCity!=null){
        foreach($listCity as $objCountry){
            echo "$objCountry[Continent]<br>";
        }
    }else{
        echo "No lo he econtrado";
    }

    mysqli_close($mysqli);
?>