<?php
$test=mysqli_connect('127.0.0.1','root','eslavaantonio777','almacen');
if($test->connect_errno){
    echo "Falló la conexión con MySQL: (" .$test->connect_errno.")".
    $test->connect_error;
}else{
    echo" Éxito: Se realizó una concexcion apropiada a MuSQL! La base de datos almacen es genial". PHP_EOL;
    echo "Informacion del host: ".mysqli_get_host_info($test). PHP_EOL;
}

if(!$test->query("DROP TABLE IF EXISTS nueva")||
!$test->query("CREATE TABLE nueva(id INT)")||
!$test->query("INSERT INTO nueva(id) VALUES (1)")){
    echo "Fallo la creacion de la tabla:(".$test->errno .")".$test->error;
}else{
    echo "Creado: ";
}
?>