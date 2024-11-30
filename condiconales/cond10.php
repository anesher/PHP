<?php
// Generar números pares entre 1 y 1000 en filas de 5, 10 y 15
$paresPorFila = [5, 10, 15]; // Definir la cantidad de pares por fila
$paresPorFilaData = [];

foreach ($paresPorFila as $cantidad) {
    $numerosPares = [];
    for ($i = 2; $i <= 1000; $i += 2) {
        $numerosPares[] = $i;
        if (count($numerosPares) == $cantidad) {
            $paresPorFilaData[] = $numerosPares;
            $numerosPares = []; // Reiniciar el array para la siguiente fila
        }
    }
    if (count($numerosPares) > 0) {
        $paresPorFilaData[] = $numerosPares; // Añadir la última fila si no está vacía
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ejercicio 10</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Números Pares entre 1 y 1000</h1>
        <?php
        // Mostrar los resultados para cada fila de 5, 10 y 15 números
        foreach ($paresPorFilaData as $fila) {
            echo "<table class='table table-bordered table-striped text-center'>";
            echo "<thead class='table-dark'><tr><th colspan='" . count($fila) . "'>Números Pares</th></tr></thead><tbody><tr>";
            foreach ($fila as $numero) {
                echo "<td>$numero</td>";
            }
            echo "</tr></tbody></table>";
        }
        ?>
    </div>
</body>
</html>
