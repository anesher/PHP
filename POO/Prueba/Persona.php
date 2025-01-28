//Crea una clase llamada Persona con propiedades nombre y edad. Usa el constructor para inicializar
estas propiedades cuando se cree un objeto.

<?php
    class Persona{
        private $nombre;
        private $edad;

        function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
    }
    $persona1=new Persona("Antonio",22);
?>