<?php
$conn = new mysqli('127.0.0.1', 'root', 'eslavaantonio777', 'registro');
if ($conn->connect_errno) {
    die("Falló la conexión con MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}

$Res = ""; // Mensaje para mostrar al usuario

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['boton'])) {
    switch ($_POST['boton']) {
        case 'resg': // Redirección al registro
            header('Location: resg.php');
            exit;
            break;
        case 'login': // Lógica de inicio de sesión
            if (isset($_POST['usuario'], $_POST['contraseña'])) {
                $usuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];

                // Consultas para obtener el usuario y contraseña
                $usuario_query = $conn->query("SELECT nombre_usuario FROM usuarios WHERE nombre_usuario = '$usuario'");
                $contraseya_query = $conn->query("SELECT contraseña FROM usuarios WHERE nombre_usuario = '$usuario'");

                // Verificar que las consultas no fallaron
                if (!$usuario_query || !$contraseya_query) {
                    die("Error al obtener los datos: " . $conn->error);
                }

                // Verificar si se encontraron resultados
                if ($usuario_query->num_rows > 0 && $contraseya_query->num_rows > 0) {
                    // Obtenemos los resultados
                    $usuario_data = $usuario_query->fetch_assoc();
                    $contraseya_data = $contraseya_query->fetch_assoc();

                    // Comparar la contraseña ingresada con la guardada
                    if ($contraseña === $contraseya_data['contraseña']) {
                        $Res = "Inicio de sesión exitoso. Bienvenido " . $usuario_data['nombre_usuario'];
                        header('Location: post.php');
                        exit;
                    } else {
                        $Res = "Contraseña incorrecta.";
                    }
                } else {
                    $Res = "Usuario no encontrado.";
                }
            } else {
                $Res = "Por favor ingrese un usuario y una contraseña.";
            }
            break;

        default:
            $Res = "Acción no válida.";
            break;
    }
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
        <form action="" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduce tu usuario" required>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary" value="login" name="boton">Iniciar Sesión</button>
        </form>
        <form action="" method="post">
            <button type="submit" class="btn btn-primary" value="resg" name="boton">Registrate</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <p><?= $Res ?></p> <!-- Mensaje de resultado -->
</body>
</html>
