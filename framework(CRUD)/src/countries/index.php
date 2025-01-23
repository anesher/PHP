<?php
include_once ("../function/connectbbdd.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>
<form method="post" action="main.php">
<table class="table">

  <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Nombre</th>
        <th scope="col">Continete</th>
        <th scope="col">Region</th>
        <th scope="col">Area</th>
        <th scope="col">Año de Independencia</th>
        <th scope="col">Poblacion</th>
        <th scope="col">Esperanza de vida</th>
        <th scope="col">GNP</th>
        <th scope="col">GNPOld</th>
        <th scope="col">Nombre Local</th>
        <th scope="col">Acciones</th>
        </tr>
    </tr>
  </thead>
  <tbody>
    <?php buscarPaises()?>
</table>
</body>
</html>