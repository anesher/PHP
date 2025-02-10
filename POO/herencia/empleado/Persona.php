<?php
    /*
    Crea una clase Persona con un método presentarse(). Luego, crea una clase Empleado que herede
    de Persona y sobrescriba el método presentarse() para agregar el puesto de trabajo.
    */
    class Persona{
        private $nombre;
        private $edad;

        public function __construct($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setEdad($edad){
            $this->edad=$edad;
        }
        
        public function presentarse(){
            echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.";
        }
    }
?>