//Crea una clase Estudiante con propiedades como nombre, edad y notaFinal. Crea un método llamado
aprobar() que devuelva un mensaje según la nota final (si la nota es mayor o igual a 6, se aprueba; si
no, se reprueba).

<?php
    class Estudiante{
        private string $nombre;
        private int $edad;
        private float $notaFinal;

        public function __construct(string $nombre, int $edad, float $notaFinal){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->notaFinal = $notaFinal;
            }
    }
?>