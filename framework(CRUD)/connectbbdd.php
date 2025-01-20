<?php

    function connect_bbdd(){
        $mysqli = mysqli_connect("localhost", "localhost", "123456", "world", 3306);
        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $mysqli;
    }


    function login($usuario,$contraseya,$extraido,$consulta){
        $mysqli=connect_bbdd();

        $res=mysqli_query($mysqli,$consulta);

        if($res!=null){
            mysqli_data_seek($res, 0); 
            $extraido = mysqli_fetch_array($res);
        }

        if ($extraido['Username'] == $usuario && $extraido['Passwordhash'] == $contraseya){ 
            header("Location: main.php");
        exit;
        }else{
            echo "Sesion no iniciada";
        }
    }


    function buscarCiudades(){
        
        $mysqli = connect_bbdd();

        $res = mysqli_query($mysqli, "SELECT * FROM city");
        if($res!=null){
            while($extraido = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                echo "<tr><td>".$extraido['ID']."</td><td>".$extraido['Name']."</td><td>".$extraido['CountryCode']."</td><td>".$extraido['District']."</td><td>".$extraido['Population']."</td></tr>";
            }
            
        }
    
    }
?>
