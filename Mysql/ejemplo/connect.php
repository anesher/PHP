<?php

// Intento de conexion a la base de datos
$mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
if (mysqli_connect_errno()) {
    // Control
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

// Realizamos una consulta a la base de datos
$listCountry = mysqli_query($mysqli, "SELECT `Code`,`Name`,`Continent` FROM `country` ORDER BY Name ASC");

// Mostramos los datos obtenidos desde la consulta
if ($listCountry != null) {

    // Una forma de recorrer con while
    echo "<h2>RECORRIDO CON WHILE:</h2>";

    while ($row = mysqli_fetch_array($listCountry)) {
        print_r($row);
        echo "<br/>";
    }

    // Otra forma con foreach
    echo "<h2>RECORRIDO CON FOREACH:</h2>";

    foreach ($listCountry as $objCountry) {
        echo "$objCountry[Code], $objCountry[Name], $objCountry[Continent]<br>";
    }

} else {
    echo "Nos hemos encontrado ningun registro para la consulta ejecutada.";
}

// Cerramos la conexion
mysqli_close($mysqli);
 