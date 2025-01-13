<?php

$mysqli = mysqli_connect('localhost', 'localhost', '123456', 'world', 3306);
if (mysqli_connect_errno()) {
    // Control
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$listCity=mysqli_query($mysqli,"SELECT `Name`,`CountryCode`,`District`, `Population` FROM `city` ORDER BY Name ASC");

if($listCity !=null){
    if(isset($_POST['city'])){
        foreach($listCity as $objCountry){
            if($_POST['city']===$objCountry[`CountryCode`]){
                echo "$objCountry[Name],$objCountry[District], $objeCountry[Population]";
            }
        }
    }
}else{
    echo "No encontrado";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="text-center mb-4">
            <h1 class="text-primary fw-bold">Trabajo Sesiones</h1>
            <p class="text-muted">Introduce un número positivo o un negativo para detener el proceso.</p>
        </div>

        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4 text-secondary">Formulario de Números</h5>
                <form action="city.php" method="post">
                    <div class="mb-3">
                        <label for="accion" class="form-label">Introduce el indice del pais:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Escribe un número" required>
                    </div>
                    <div class="text-center">
                    <button type="submit" name="accion_button" value="seguir" class="btn btn-primary w-100 mb-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>