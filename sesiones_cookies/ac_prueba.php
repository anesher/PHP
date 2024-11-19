<?php
    session_start();
    // La primera vez que se carga la pagina, se inicializan
    // las variables de sesion a y b a cero
    //isset es para comprobar que si la variable te viene vacia o llena
    if(!isset($_SESSION['a'])){
        $_SESSION['a']=0;
    } 

    if(!isset($_SESSION['b'])){
        $_SESSION['b']=0;
    }

    if(!isset($_POST['accion'])){
        $_POST['accion']='';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOlA</title>
</head>
<body>
    <?php
        switch($_POST['accion']){
            case "incA":
                $_SESSION['a']++;
                break;
            case "decA":
                $_SESSION['a']--;
                break;
            case "incB":
                $_SESSION['b']++;
                break;
            case "decB":
                $_SESSION['b']--;
                break;
            case "cierra":
                session_destroy();
                header("refresh: 0;");
        }
    ?>
    <h1>
        a = <?php echo $_SESSION['a']; ?> <br>
        b = <?php echo $_SESSION['b'];?>
    </h1>

    <form action="#" method="POST">
        <select name="accion" id="accion">
        <option value="incA"> Incrementa a</option>
            <option value="decA"> Decrementa a</option>
            <option value="incB"> Incrementa b</option>
            <option value="decB"> Decrementa b</option>
            <option value="cierra"> Cierra sesión</option>
        </select>
        <input type="submit" value="OK">
    </form>
</body>
</html>