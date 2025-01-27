<?php
include_once ("connectbbdd.php");

function eliminarPais($id,$tabla){
    $mysqli = connect_bbdd();
    $stmt = $mysqli->prepare("DELETE FROM $tabla WHERE Code = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}

