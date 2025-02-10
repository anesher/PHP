<?php
    require_once("Vehiculo.php");
    class Moto extends Vehiculo{
        public $casco;
        public $tipo;

        public function __construct($cilindrada,$puertas,$ruedas,$casco,$tipo){
            parent::__construct($cilindrada,$puertas,$ruedas);
            $this->casco=$casco;
            $this->tipo=$tipo;
        }

        public  function arrancar(){
            echo "Arrancando moto";
        }
    }

?>