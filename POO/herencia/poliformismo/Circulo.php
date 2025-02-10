<?php
    include_once("Figura.php");

    class Circulo extends Figura{
        private $radio;
        public function __construct($radio){
            $this->radio=$radio;
        }
        public function getRadio(){
            return $this->radio;
        }
        public function setRadio($radio){
            $this->radio=$radio;
        }
        public function area(){
            return 3.1416 * pow($this->radio,2);
        }
    }
    $objCirculo=new Circulo(5);
    echo "El área del círculo es: " . $objCirculo->area();
?>