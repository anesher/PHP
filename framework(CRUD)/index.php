<?php
  include_once ("connectbbdd.php");
 
  if(isset($_POST['user'])&&(isset($_POST['password']))){
       $usuario = $_POST['user'];
       $contraseya = $_POST['password'];
       
        $consulta = "SELECT `Username`,`Passwordhash` FROM `user` WHERE `Username`='$usuario' AND `Passwordhash`='$contraseya'";
        
        login($usuario,$contraseya,$extraido,$consulta);
 
    }
  
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="Antonio Eslava Hernández" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <title>Framework</title>

   
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">

  </head>
  
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
     
  <main class="form-signin m-auto">
    <form method="post" action="index.php">
      <img class="mb-4" src="img/cordoba.jpg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Inicar Sesion</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="user" name="user" placeholder="Nombre de Usuario">
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">© Antonio Eslava </p>
  </form>
</main>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>