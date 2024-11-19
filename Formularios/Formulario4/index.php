<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Trabajo Formularios 4</h1>
    <form action="post.php" method="post"> 
        <p> Escribe un programa que sume, reste, mulƟplique y divida dos números introducidos por teclado.</p>
        <div class="mb-3">
        <label for="tdpar" class="form-label">formulario 3</label>
        <input type="parsefloat" class="form-control" id="numero1" name="numero1" placeholder="numero1">
        <input type="parsefloat" class="form-control" id="numero2" name="numero2" placeholder="numero2">
        <select multiple name="valor" id="valor" class="form-control">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>