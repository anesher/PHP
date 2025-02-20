<?php
require_once('libs/ClassrenderHTML.php');

// Creamos un objeto de la clase render HTML
$objHTML = new RenderHTML();

// Actualizamos la propiedad "esta logeado" en false (aun no hemos hecho login)
$objHTML->setLogged(false);

// Se imprime el HTML del inicio de la página (desde la clase)
$objHTML->RenderHeader();
?>

<!-- Código HTML de la pagina index.php -->
<div class="text-center mb-5">
    <img class="" src="./images/logo-fp.jpg" alt="" height="22">
</div>

<form class="form-signin" method="POST" action="index.php">
    <h1 class="h3 mb-5 fw-normal text-center">Iniciar Sesión</h1>

    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Nombre de Usuario">
        <label for="UserName">Nombre de Usuario</label>
    </div>
    <div class="form-floating mb-1">
        <input type="password" class="form-control" id="Password" name="Password" placeholder="Contraseña">
        <label for="Password">Contraseña</label>
    </div>

    <button class="btn btn-success w-100 py-2 mb-3" type="submit">Acceder</button>
</form>

<p class="mt-5 mb-3 text-body-secondary text-center">Antonio Eslava &copy;2024</p>
<!-- FIN Código HTML de la pagina index.php -->

<?php
// Se imprime el HTML del final de la página (desde la clase)
$objHTML->RenderFooter();
?>