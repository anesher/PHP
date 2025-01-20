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
            header("Location: indice.php");
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

    function buscarPaises(){
        $mysqli = connect_bbdd();
        $res = mysqli_query($mysqli, "SELECT * FROM country");
        if($res!=null){
            while($extraido = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                echo "<tr><td>".$extraido['Code']."</td><td>".$extraido['Name']."</td><td>".$extraido['Continent']."</td><td>".$extraido['Region']."</td><td>".$extraido['SurfaceArea']."</td><td>".$extraido['IndepYear']."</td><td>".$extraido['Population']."</td><td>".$extraido['LifeExpectancy']."</td><td>".$extraido['GNP']."</td><td>".$extraido['GNPOld']."</td><td>".$extraido['LocalName']."</td><td>".$extraido['GovernmentForm']."</td><td>".$extraido['HeadOfState']."</td><td>".$extraido['Capital']."</td><td>".$extraido['Code2']."</td>".
                "<td><button type='button' class='btn btn-danger'>Delete</button></td><td><button type='button' class='btn btn-warning'>Modificar</button></td></tr>";
            } 
        }
    }

    function delete(){
        $mysqli = connect_bbdd();

    }
?>
