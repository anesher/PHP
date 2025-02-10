<?php
    include_once("Persona.php");
    class Estudiante extends Persona{
        private $carrera;
        public function __construct($nombre,$carrera){
            parent::__construct($nombre);
            $this->carrera=$carrera;
        }
        public function getCarrera(){
            return $this->carrera;
        }
        public function setCarrera($carrera){
            $this->carrera=$carrera;
        }
        public function presentarse(){
            echo "Hola, mi nombre es " . $this->getNombre() . " y estudio " . $this->getCarrera() . ".";
        }
    }
    $objEstudiante=new Estudiante("Juan","Ingeniería en Sistemas");
    $objEstudiante->presentarse();
?>