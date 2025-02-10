<?php
    /*
    Crea una clase Persona con una propiedad nombre y un método mostrarNombre(). Luego, crea una
    clase Estudiante que herede de Persona y modifique la visibilidad de las propiedades y métodos
    según las necesidades.
    */
    class Persona{
        public $nombre;
        public function __construct($nombre){
            $this->nombre=$nombre;
        }
        public function mostrarNombre(){
            echo "Mi nombre es " . $this->nombre;
        }
    }
?>