<?php
// Conversión de Pesetas a Euros usando el bucle WHILE
$pesetasToEurosWhile = [];
$pesetas = 50;
while ($pesetas <= 1000) {
    $euros = $pesetas / 166.386;
    $pesetasToEurosWhile[] = ['pesetas' => $pesetas, 'euros' => number_format($euros, 2)];
    $pesetas += 50;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ejercicio 9</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Conversión de Pesetas a Euros (WHILE)</h1>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Pesetas</th>
                    <th>Euros</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mostrar los resultados
                foreach ($pesetasToEurosWhile as $row) {
                    echo "<tr><td>{$row['pesetas']}</td><td>{$row['euros']} €</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
