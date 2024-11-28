<!-- Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página. Esta
página debe tener únicamente algo de texto y un formulario para cambiar el color.-->

<?php
    // Inicializa la variable $backgroundColor con un valor predeterminado.
    $backgroundColor = "#f8f9fa";

    // Si existe una cookie de color de fondo, úsala.
    if (isset($_COOKIE['backgroundColor'])) {
        $backgroundColor = $_COOKIE['backgroundColor'];
    }

  if (isset($_POST['color'])) {
      $selectedColor = $_POST['color'];
      switch ($selectedColor) {
          case 'rojo':
              $backgroundColor = "#fc2d01";
              break;
          case 'verde':
              $backgroundColor = "#42fc01";
              break;
          case 'azul':
              $backgroundColor = "#017bfc";
              break;
            case 'amarillo':
                $backgroundColor= "#fff403";
                break;
          default:
              $backgroundColor = "#f8f9fa";
            break; 
      }
  
     
      setcookie("backgroundColor", $backgroundColor, time() + (30 * 24 * 60 * 60));
 
      header("Location: " . $_SERVER['PHP_SELF']);
      exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Actividad 5: Colores</title>
    <style>
        body {
            background-color: <?=$backgroundColor?>;
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
        }
    </style>
</head>
<body>
    <div class="form-container text-center">
        <h1 class="mb-4">Elige un color</h1>
        <form action="ac5.php" method="post">
            <select class="form-select mb-3" name="color" aria-label="Selecciona un color">
                <option selected disabled>Selecciona un color</option>
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <option value="amarillo">Amarillo</option>
            </select>
            <button type="submit" class="btn btn-primary">Guardar Color</button>
        </form>
    </div>
</body>
</html>
