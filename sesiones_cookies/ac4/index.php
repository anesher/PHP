<!-- Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los programas de la
relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión con un nombre de usuario y
contraseña correctos, almacenados previamente en una cookie.-->

<?php
    session_start();

    setcookie('usuario','antonio',time()+ 3*24*3600);
    setcookie('contraseña','1234',time()+3*24*3600);

    if(!isset($_POST['usuario'])){
        $_POST['usuario']='';
    }
    if(!isset($_POST['contraseña'])){
        $_POST['contraseña']='';
    }

    $Res = '';
        if ($_COOKIE['usuario'] == $_POST['usuario'] && $_POST['contraseña'] == $_COOKIE['contraseña']) {
                header('Location: post.php');
                exit();
         } else {
                $Res = "Usuario o contraseña incorrectos.";
            }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario" required>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary" value="iniciar" name='boton'>Iniciar Sesión</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<p><?= $Res?></p>
</body>
</html>