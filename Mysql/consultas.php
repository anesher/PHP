<?php
$test=mysqli_connect('127.0.0.1','root','eslavaantonio777','deportes');
if($test->connect_errno){
    echo "Falló la conexión con MySQL: (" .$test->connect_errno.")".
    $test->connect_error;
}else{
    echo" Éxito: Se realizó una concexcion apropiada a MuSQL! La base de datos almacen es genial". PHP_EOL;
    echo "Informacion del host: ".mysqli_get_host_info($test). PHP_EOL;
}
$resultado=$test->query("SELECT * FROM deportes.detalle;");
print_r($resultado);
?>