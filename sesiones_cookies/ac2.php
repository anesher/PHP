<!--Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negaƟvo y nos diga cuantos
números se han introducido, la media de los impares y el mayor de los pares. El número negaƟvo sólo se uƟliza para
indicar el final de la introducción de datos, pero no se incluye en el cómputo. UƟliza sesiones.-->
<?php
session_start();

// Initialize session variables if they don't exist
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = [];
}
if (!isset($_SESSION['max'])) {
    $_SESSION['max'] = 0;
}
if (!isset($_SESSION['acumuladorIM'])) {
    $_SESSION['acumuladorIM'] = 0;
}

// If 'accion' is set and a number is entered, process the input
if (isset($_POST['accion']) && $_POST['accion'] >= 0) {
    $numero = intval($_POST['accion']);
    $_SESSION['array'][] = $numero; // Add the number to the array
    $Res = "Número agregado: $numero"; // Confirm number addition
} else {
    // Process session array when no new number is provided
    $lengt = count($_SESSION['array']);
    $LengtIM = 0;

    for ($i = 0; $i < $lengt; $i++) {
        $num = $_SESSION['array'][$i];

        if ($num % 2 === 0) { // Check if number is even
            if ($num > $_SESSION['max']) {
                $_SESSION['max'] = $num; // Update max even number
            }
        } else { // Process odd numbers
            $_SESSION['acumuladorIM'] += $num;
            $LengtIM++;
        }
    }

    // Calculate and display average of odd numbers if any exist
    if ($LengtIM > 0) {
        $final = $_SESSION['acumuladorIM'] / $LengtIM;
        $Res = "La media de los impares es: $final<br>";
    } else {
        $Res = "No hay números impares para calcular la media.<br>";
    }

    // Display the largest even number
    $Res .= "El número mayor par es: " . $_SESSION['max'] . "<br>";

    // Destroy the session after results are calculated
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Formulario de Números</h5>
                <form action="ac2.php" method="post">
                    <div class="mb-3">
                        <label for="accion" class="form-label">Introduce un número:</label>
                        <input type="number" class="form-control" id="accion" name="accion" placeholder="Escribe un número" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">Enviar</button>
                </form>
                <p class="mt-3 text-center"><?= isset($Res) ? $Res : ''; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
