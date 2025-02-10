<?php
    include_once("Figura.php");

    class Rectangulo extends Figura{
        private $base;
        private $altura;

        public function __construct($base,$altura){
            $this->base=$base;
            $this->altura=$altura;
        }
        public function getBase(){
            return $this->base;
        }
        public function setBase($base){
            $this->base=$base;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function setAltura($altura){
            $this->altura=$altura;
        }
        public function area(){
            return $this->base * $this->altura;
        }
    }
    $objRectangulo=new Rectangulo(10,5);
    echo "El área del rectángulo es: " . $objRectangulo->area();
    
?>