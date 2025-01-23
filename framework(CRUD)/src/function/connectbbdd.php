<?php

    function connect_bbdd(){
        $mysqli = mysqli_connect("localhost", "localhost", "123456", "world", 3306);
        if (mysqli_connect_errno()) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $mysqli;
    }


    function login($usuario,$contraseya,$consulta){
        $mysqli=connect_bbdd();

        $res=mysqli_query($mysqli,$consulta);

        if($res!=null){
            mysqli_data_seek($res, 0); 
            $extraido = mysqli_fetch_array($res);
        }
            
        if (isset($extraido) && $extraido['Username'] == $usuario && $extraido['Passwordhash'] == $contraseya){
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
                echo "<tr>";
                echo "<td>" . $extraido['ID'] . "</td>";
                echo "<td>" . $extraido['Name'] . "</td>";
                echo "<td>" . $extraido['CountryCode'] . "</td>";
                echo "<td>" . $extraido['District'] . "</td>";
                echo "<td>" . $extraido['Population'] . "</td>";
                echo "<td><button type='button' class='btn btn-danger'>Delete</button> ";
                echo "<button type='button' class='btn btn-warning'>Modificar</button></td>";
                echo "</tr>";  
            }
            
        }
    }

    function buscarPaises(){
        $mysqli = connect_bbdd();
        $res = mysqli_query($mysqli, "SELECT * FROM country");
        if($res!=null){
            while($extraido = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                echo "<tr>";
                echo "<td>" . $extraido['Code'] . "</td>";
                echo "<td>" . $extraido['Name'] . "</td>";
                echo "<td>" . $extraido['Continent'] . "</td>";
                echo "<td>" . $extraido['Region'] . "</td>";
                echo "<td>" . $extraido['SurfaceArea'] . "</td>";
                echo "<td>" . $extraido['IndepYear'] . "</td>";
                echo "<td>" . $extraido['Population'] . "</td>";
                echo "<td>" . $extraido['LifeExpectancy'] . "</td>";
                echo "<td>" . $extraido['GNP'] . "</td>";
                echo "<td>" . $extraido['GNPOld'] . "</td>";
                echo "<td>" . $extraido['LocalName'] . "</td>";
                echo "<td><button type='button' class='btn btn-danger'>Delete</button>";
                echo "<td><button type='button' class='btn btn-warning'>Modificar</button></td>";
                echo "</tr>";

            } 
        }
    }

?>
