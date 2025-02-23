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
<div class="container mt-3">
    <div class="d-flex justify-content-start mb-3">
        <button type="button" class="btn btn-primary me-2">Buscar</button>
        <button type="button" class="btn btn-success">Crear</button>
    </div>
    <form method="post" action="main.php">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Codigo del Pais</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Poblacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php listarCiudades()?>
            </tbody>
        </table>
    </form>
</div>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>