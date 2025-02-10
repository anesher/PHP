<?php
    include_once("Persona.php");
    class Empleado extends Persona{
        private $puesto;
        public function __construct($nombre,$edad,$puesto){
            parent::__construct($nombre,$edad);
            $this->puesto=$puesto;
        }
        public function getPuesto(){
            return $this->puesto;
        }
        public function setPuesto($puesto){
            $this->puesto=$puesto;
        }
        public function presentarse(){
            echo "Hola, mi nombre es " . $this->getNombre() . " y tengo " . $this->getEdad() . " años. Soy " . $this->getPuesto() . ".";
        }
    }
    $objEmpleado=new Empleado("Juan",30,"Programador");
    $objEmpleado->presentarse();
?>