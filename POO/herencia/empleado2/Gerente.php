<?php
    include_once("Empleado.php");

    class Gerente extends Empleado{
        private $departamento;

        public function __construct($nombre,$salario,$departamento){
            parent::__construct($nombre,$salario);
            $this->departamento=$departamento;
        }
        public function getDepartamento(){
            return $this->departamento;
        }
        public function setDepartamento($departamento){
            $this->departamento=$departamento;
        }
        function  listarNombre(){
            echo "<div style='border: 1px solid #000; padding: 10px; width: 300px;'>";
            echo "<h3>Detalles del Persona</h3>";
            echo "<p><strong>nombre:</strong> " . $this->getNombre() . "</p>";
            echo "<p><strong>Salario:</strong> " . $this->getSalario() . "</p>";
            echo "<p><strong>Departamento:</strong> " . $this->getDepartamento() . "</p>";
        }
    }
    $objGerente=new Gerente("Juan",5000,"Sistemas");

    $objGerente->listarNombre();

?>