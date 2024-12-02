<?php
// el primero es la direccion del sercidor en la base de datos, despues el nombre del usario, contraseña y como se llama la base de Datos
    $enlace=mysqli_connect('127.0.0.1','root','eslavaantonio777', 'almacen');
    if(!$enlace){
        echo "Error: No se pudo conectar a MYSQL.". PHP_EOL;
        echo "Error de depuracion: ". mysqli_connect_errno(). PHP_EOL;
        echo "error de depuracion: ".mysqli_connect_error().PHP_EOL;
        }
    echo" Éxito: Se realizó una concexcion apropiada a MuSQL! La base de datos almacen es genial". PHP_EOL;
    echo "Informacion del host: ".mysqli_get_host_info($enlace). PHP_EOL;
    mysqli_close($enlace);
?>