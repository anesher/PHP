<!--Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa pedirá que el usuario
teclee la traducción al español de cada una de las palabras y comprobará si son correctas. Al final, el programa deberá
mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se deben guardar en
cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la aplicación puede llegar a contar con un
número considerable de entradas en el mini-diccionario.-->
<?php
session_start();

// Inicializar o recuperar el diccionario desde las cookies
if (!isset($_COOKIE['biblioteca'])) {
    $biblioteca = [];
    setcookie('biblioteca', serialize($biblioteca), time() + 3 * 24 * 3600);
} else {
    $biblioteca = unserialize($_COOKIE['biblioteca']);
}

// Seleccionar palabra aleatoria si el diccionario no está vacío
$palabraRandom = null;
if (!empty($biblioteca)) {
    $palabraRandom = array_rand($biblioteca);
}

if (isset($_POST['boton'])) {
    switch ($_POST['boton']) {
        case 'intro':
            $palabraIngles = $_POST['intro1'] ?? '';
            $palabraEspanol = $_POST['intro2'] ?? '';
            if ($palabraIngles && $palabraEspanol) {
                $biblioteca[$palabraIngles] = $palabraEspanol;
                setcookie('biblioteca', serialize($biblioteca), time() + 3 * 24 * 3600);
                $mensaje = "Palabra añadida correctamente.";
            } else {
                $mensaje = "Por favor, completa ambos campos.";
            }
            break;

        case 'comprobar':
            $respuesta = $_POST['respuesta'] ?? '';
            if ($palabraRandom && $respuesta) {
                $significadoCorrecto = $biblioteca[$palabraRandom];
                if ($palabraRandom && $respuesta) {
                // Compara la respuesta del usuario con la traducción correcta (sin importar mayúsculas/minúsculas).
                    if (strtolower($respuesta) == strtolower($biblioteca[$palabraRandom])) {
                        $mensaje = "¡Correcto! La traducción de '$palabraRandom' es '$respuesta'.";
                    } else {
                        $mensaje = "Incorrecto. La traducción de '$palabraRandom' es '" . $biblioteca[$palabraRandom] . "'.";
                    }
                } else {
                    $mensaje = "No hay palabras en el diccionario o no ingresaste una respuesta.";
                }
                
            } else {
                $mensaje = "No hay palabras en el diccionario o no ingresaste una respuesta.";
            }
            break;

        default:
            $mensaje = "Acción no reconocida.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Actividad 5: Diccionario</title>
    <style>
        body {
            background-color: #25ff03;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="form-container text-center">
        <h1 class="mb-4">Diccionario de Inglés-Español</h1>
        
        <?php if (isset($mensaje)): ?>
            <div class="alert alert-info"><?= $mensaje ?></div>
        <?php endif; ?>
        
        <!-- Formulario para introducir palabras -->
        <form action="ac6.php" method="post">
            <h2 class="mb-3">Añadir Palabras al Diccionario</h2>
            <div class="mb-3">
                <input type="text" class="form-control" id="intro1" name="intro1" placeholder="Palabra en Inglés" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="intro2" name="intro2" placeholder="Palabra en Español" required>
            </div>
            <button type="submit" class="btn btn-primary mb-4" name="boton" value="intro">Introducir</button>
        </form>
        
        <!-- Formulario para comprobar traducción -->
        <form action="ac6.php" method="post">
            <h2 class="mb-3">Buscar Significado</h2>
            <?php if ($palabraRandom): ?>
                <p class="mb-3">Traduce esta palabra: <strong><?= htmlspecialchars($palabraRandom) ?></strong></p>
                <div class="mb-3">
                    <input type="text" class="form-control" id="respuesta" name="respuesta" placeholder="Escribe la traducción en español" required>
                </div>
                <button type="submit" class="btn btn-primary" name="boton" value="comprobar">Comprobar</button>
            <?php else: ?>
                <p>No hay palabras en el diccionario para comprobar.</p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
