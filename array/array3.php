<?php
// Crear un array con los 10 primeros números pares
$numerosPares = [];
for ($i = 1; $i <= 10; $i++) {
    $numerosPares[] = $i * 2;
}

// Imprimir cada número en una fila
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<tr><th>Número Par</th></tr>"; // Cabecera de la tabla
foreach ($numerosPares as $numero) {
    echo "<tr><td>$numero</td></tr>";
}
echo "</table>";
?>
