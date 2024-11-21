<!-- Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras su suma no supere
el valor 10000. Cuando esto úlƟmo ocurra, se debe mostrar el total acumulado, el contador de los números
introducidos y la media. UƟliza sesiones.-->
<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;  
}

if (!isset($_POST['accion_button'])) {
    $_POST['accion_button'] = '';  
}

$accion = $_POST['accion_button']; 

switch ($accion) {
    case 'seguir':
        if (isset($_POST['accion']) && is_numeric($_POST['accion'])) {
            $numero = (int)$_POST['accion'];
            
            if ($numero > 0) {
                $_SESSION['numero'] += $numero;
                $_SESSION['contador']++;
                // Comprueba si ya se ha alcanzado el límite
                if ($_SESSION['numero'] >= 10000) {
                    echo "<p> El total es de: " . $_SESSION['numero'] . "</p>";
                    echo "<p> Los números introducidos son: " . $_SESSION['contador'] . "</p>";
                    echo "<p> La media es de: " . ($_SESSION['numero'] / $_SESSION['contador']) . "</p>";
                    session_destroy(); 
                    echo "<p> Sesión cerrada automáticamente al alcanzar el límite.</p>";
                } else {
                    // Si aún no se alcanza el límite, muestra el último número agregado
                    echo "<p> Has introducido: $numero</p>";
                    echo "<p> Total acumulado: " . $_SESSION['numero'] . "</p>";
                }
            } else {
                echo "<p> Por favor, introduce un número positivo.</p>";
            }
        } else {
            echo "<p> Por favor, ingresa un número válido.</p>";
        }
        break;

    case 'cerrar':
        echo "<p> El total es de : " . $_SESSION['numero'] . "</p>";
        echo "<p> Los números introducidos son: " . $_SESSION['contador'] . "</p>";
        echo "<p> La media es de: " . ($_SESSION['numero'] / $_SESSION['contador']) . "</p>";
        session_destroy();
        echo "<p>Sesión cerrada. Vuelve a ingresar cuando quieras.</p>";
        break;

    default:
        echo "<p>Acción no reconocida.</p>";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Sesiones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-tQG6BzVRJ8I2YjQn6I8JUW6nU9X+1p6eOjOGj5gGtptlzxk9VR8rQ0VQe4HJcl8C" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .text-muted {
            font-size: 0.9rem;
        }
    </style>
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
                <form action="ac2.php" method="post">
                    <div class="mb-3">
                        <label for="accion" class="form-label">Introduce un número positivo:</label>
                        <input type="number" class="form-control" id="accion" name="accion" placeholder="Escribe un número" required>
                    </div>
                    <div class="text-center">
                    <button type="submit" name="accion_button" value="seguir" class="btn btn-primary w-100 mb-2">Enviar</button>
                    <button type="submit" name="accion_button" value="cerrar" class="btn btn-danger w-100">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
