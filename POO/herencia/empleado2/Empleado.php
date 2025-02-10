<?php
    /*
    Crea una clase Empleado con propiedades nombre y salario. Luego, crea una clase Gerente que
    herede de Empleado y añada una propiedad adicional departamento.
    */

    class Empleado{
        private $nombre;
        private $salario;

        public function __construct($nombre,$salario){
            $this->nombre=$nombre;
            $this->salario=$salario;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($salario){
            $this->salario=$salario;
        }
    }
?>