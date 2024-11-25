<?php
session_start();

// Inicializar variables de sesión
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [];
}
if (!isset($_SESSION['max'])) {
    $_SESSION['max'] = 0;
}
if (!isset($_SESSION['acumuladorIM'])) {
    $_SESSION['acumuladorIM'] = 0;
}

// Procesar la acción del formulario
$Res = '';
if (isset($_POST['boton'])) {
    switch ($_POST['boton']) {
        case 'enviar':
            if (isset($_POST['accion']) && $_POST['accion'] >= 0) {
                $numero = intval($_POST['accion']);
                $_SESSION['array'][] = $numero; 
                $Res = "Número agregado: $numero";
            } else {
                $lengt = count($_SESSION['array']);
                $LengtIM = 0;
            
                for ($i = 0; $i < $lengt; $i++) {
                    $num = $_SESSION['array'][$i];
                    if ($num % 2 === 0) { 
                        if ($num > $_SESSION['max']) {
                            $_SESSION['max'] = $num;
                        }
                    } else { 
                        $_SESSION['acumuladorIM'] += $num;
                        $LengtIM++;
                    }
                }
            
                if ($LengtIM > 0) {
                    $final = $_SESSION['acumuladorIM'] / $LengtIM;
                    $Res = "La media de los impares es: $final<br>";
                } else {
                    $Res = "No hay números impares para calcular la media.<br>";
                }
            
                $Res .= "El número mayor par es: " . $_SESSION['max'] . "<br>";
                session_destroy();
            }
            break;

        case 'cerrar':
            session_destroy();
            $Res = "Sesión cerrada. Redirigiendo...";
            header("refresh: 2; url=index.php");
            exit();
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .close-session {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <!-- Botón de cerrar sesión en la esquina -->
    <form action="post.php" method="post" class="close-session">
        <button type="submit" class="btn btn-danger" name="boton" value="cerrar">Cerrar Sesión</button>
    </form>

    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Formulario de Números</h5>
                <form action="post.php" method="post">
                    <div class="mb-3">
                        <label for="accion" class="form-label">Introduce un número:</label>
                        <input type="number" class="form-control" id="accion" name="accion" placeholder="Escribe un número" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2" name="boton" value="enviar">Enviar</button>
                </form>
                <p class="mt-3 text-center"><?= $Res ?></p>
            </div>
        </div>
    </div>
</body>
</html>
