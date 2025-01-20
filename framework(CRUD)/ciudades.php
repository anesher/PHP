<?php
include_once ("connectbbdd.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>CRUD</title>
</head>

<body>
<form method="post" action="main.php">
<table class="table">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nomhre</th>
      <th scope="col">Codigo del Pais</th>
      <th scope="col">Distrito</th>
      <th scope="col">Poblacion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php buscarCiudades()?>
    <td><button type='button' class='btn btn-danger'>Delete</button></td>
    <td><button type='button' class='btn btn-warning'>Modificar</button></td>
    </tbody>
</table>
</body>
</html>