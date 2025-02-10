<?php
    /*
    Define una clase Vehiculo con un constructor que inicialice la propiedad marca. Luego, crea una clase Coche que
    herede de Vehiculo y añada una propiedad modelo. UƟliza el constructor de la clase padre en la clase hija.
    */
    class Vehiculo{
        public $cilindrada;
        public $puertas;
        public $ruedas;
        private $marca;

        public function __construct($cilindrada,$puertas,$ruedas,$marca){
            $this->cilindrada=$cilindrada;
            $this->puertas=$puertas;
            $this->ruedas=$ruedas;
            $this->marca=$marca;
        }   
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            $this->marca=$marca;
        }
        public function arrancar(){
            echo "Arrancando vehículo";
        }
    }
?>