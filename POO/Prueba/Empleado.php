//Crea una clase llamada Empleado con al menos 6 propiedades. Crea métodos get y set para estas
propiedades.

<?php
    class Empleado {
        private $nombre;
        private $edad;
        private $direccion;
        private $telefono;
        private $sueldo;
        private $cargo;

        function getNombre(){
            return $this->nombre;
        }

        function getEdad(){
            return $this->edad;
        }

        function getDireccion(){
            return $this->direccion;
        }

        function getTelefono(){
            return $this->telefono;
        }

        function getSueldo(){
            return $this->sueldo;
        }

        function getCargo(){
            return $this->cargo;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function setEdad($edad){
            $this->edad = $edad;
        }

        function seDirreccion($direccion) {
            $this->direccion = $direccion;
        }

        function setTelefono($num){
            $this->telefono = $num;
        }

        function setSueldo($money){
            $this->sueldo = $money;
        }

        function setCargo($cargo){
            $this->cargo = $cargo;
        }
    }
?>