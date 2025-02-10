<?php
    /*
    Crea una clase Animal con una propiedad nombre y un método hablar(). Luego, crea una clase Perro que herede de
    Animal y sobreescriba el método hablar() para que diga "¡Guau!".
    */

    class Animal{
        private $nombre;

        public function __construct($nombre){
            $this->nombre=$nombre;
        }

        //metodo get and set
        public function getNombre(){
                return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
    
        //metodo hablar()

        public function hablar(){
            echo "Hablando";
        }   
       
    }
?>