<?php
include_once ("connectbbdd.php");

function delete(){
    $mysqli = connect_bbdd();
    $id = $_POST['id'];
    $res = mysqli_query($mysqli, "DELETE FROM city WHERE ID = $id");
    if($res!=null){
        echo "Ciudad eliminada";
    }else{
        echo "Error al eliminar la ciudad";
    }
}

?>