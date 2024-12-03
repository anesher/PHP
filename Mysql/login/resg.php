<?php
$conn=new mysqli('127.0.0.1','root','eslavaantonio777', 'registro');
if($conn->connect_errno){
    echo "Falló la conexión con MySQL: (" .$conn->connect_errno.")".
    $conn->connect_error;
}
// Procesar el formulario solo si se envía por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $nombreUsuario = $_POST['username'];
    $email = $_POST['email'];
    $contraseya = $_POST['password'];

    // Preparar la consulta
    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contraseña) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Verificar si la preparación fue exitosa
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("sss", $nombreUsuario, $email, $contraseya);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Registro exitoso.";
            header('Location: index.php');
            exit;
        } else {
            echo "Error al registrar: " . $stmt->error;
        }

        // Cerrar el statement
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Registro</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center">
            <h4>Formulario de Registro</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="">
              <!-- Nombre de usuario -->
              <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingresa tu nombre de usuario" required>
              </div>

              <!-- Correo electrónico -->
              <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name ="email" placeholder="ejemplo@correo.com" required>
              </div>

              <!-- Contraseña -->
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
              </div>

              <!-- Botón de registro -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
