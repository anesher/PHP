<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice</title>
    <style>
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            cursor: pointer;
        }
        .btn-ciudades {
            background-color: #4CAF50; /* Verde */
            color: white;
        }
        .btn-paises {
            background-color: #008CBA; /* Azul */
            color: white;
        }
    </style>
</head>
<body>
    <h1>Índice</h1>
    <button class="btn btn-ciudades" onclick="location.href='./cities/index.php'">Ciudades</button>
    <button class="btn btn-paises" onclick="location.href='./countries/index.php'">Países</button>
</body>
</html>