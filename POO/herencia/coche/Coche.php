<?php
    include_once("Vehiculo.php");

    class Coche extends Vehiculo{
        private $modelo;

        public function __construct($modelo,$cilindrada,$puertas,$ruedas,$marca)
        {
            parent::__construct($cilindrada,$puertas,$ruedas,$marca);
            $this->modelo=$modelo;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo=$modelo;
        }

        function listarCoche(){
            echo "<div style='border: 1px solid #000; padding: 10px; width: 300px;'>";
            echo "<h3>Detalles del Coche</h3>";
            echo "<p><strong>Modelo:</strong> " . $this->getModelo() . "</p>";
            echo "<p><strong>Marca:</strong> " . $this->getMarca() . "</p>";
            echo "<p><strong>Cilindrada:</strong> " . $this->cilindrada . "</p>";
            echo "<p><strong>Puertas:</strong> " . $this->puertas . "</p>";
            echo "<p><strong>Ruedas:</strong> " . $this->ruedas. "</p>";
        }
    }
    $objeCoche=new Coche("civic",1000,4,4,"Hyundai");
    $objeCoche->listarCoche();
?>