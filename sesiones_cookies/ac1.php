// Escribe un programa que calcule la media de un conjunto de números posiƟvos introducidos por teclado. A priori, el
programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos
cuando meta un número negaƟvo. UƟliza sesiones.

<?php
    session_start();

    if(!isset($_SESSION['a']) ){
        $_SESSION['a']=0;
    }

    if(!isset($_SESSION['b'])){
        $_SESSION['b']=1;
    }
   
    if(!isset ($_POST['accion'])){
        $_POST['accion']='';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>Introduce un numero positivo </p>

    <?php 
      if (isset ($_POST ['accion']) && $_POST['accion']>=0){
           $_SESSION['a']=$_SESSION['a']+$_POST['accion'];
           $_SESSION['b']++;
           echo $_SESSION['a'];
         }else{
            echo "total de suma : ". $_SESSION['a']. "<br>";
            echo "media :" .$_SESSION['a']/$_SESSION['b'];
            session_destroy();
         }
     ?>

    <h1>Trabajo sesiones</h1>
    <form action="ac1.php" method="post">
        <p>Introduce un numero positivo </p>
        <div class="mb-3">
            <label for="tdpar" class="form-label">Introduce un numeros positivo y un negativo para parar</label>
            <input type="number" class="form-control" id="accion" name="accion" placeholder="numero">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>