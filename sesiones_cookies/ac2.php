<!--Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negaƟvo y nos diga cuantos
números se han introducido, la media de los impares y el mayor de los pares. El número negaƟvo sólo se uƟliza para
indicar el final de la introducción de datos, pero no se incluye en el cómputo. UƟliza sesiones.-->
<?php

 session_start();

if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [];
}
if (!isset($_SESSION['max'])) {
    $_SESSION['max'] = 0;
}
if (!isset($_SESSION['acumuladorIM'])) {
    $_SESSION['acumuladorIM'] = 0;
}


if (isset($_POST['accion']) && $_POST['accion']>=0) {
    $numero = intval($_POST['accion']);
    $_SESSION['array'][] = $numero; 
    echo "Numero agregado: $numero<br>";
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
        echo "La media de los impares es: $final<br>";
    } else {
        echo "No hay números impares para calcular la media.<br>";
    }

    echo "El número mayor par es: " . $_SESSION['max'] . "<br>";

   
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Sesiones</title>
     Bootstrap CSS 
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
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>



