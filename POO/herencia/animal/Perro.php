<?php
    require_once("Animal.php");
    class Perro extends Animal{
        private $ladrar;

        function __construct($nombre,$ladrar){
            parent::__construct($nombre);
            $this->ladrar=$ladrar;
        }
        public function hablar(){
            echo $this->ladrar;
        }
    }

    $objPerro=new Perro("Firulais","¡Guau!");
    $objPerro->hablar();
?>