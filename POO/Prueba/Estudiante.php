//Crea una clase Estudiante con propiedades como nombre, edad y notaFinal. Crea un método llamado
aprobar() que devuelva un mensaje según la nota final (si la nota es mayor o igual a 6, se aprueba; si
no, se reprueba).

<?php
    class Estudiante{
        private string $nombre;
        private int $edad;
        private float $notaFinal;

        public function __construct(string $nombre, float $notaFinal){
            $this->nombre = $nombre;
            $this->notaFinal = $notaFinal;
            }
        
        function getNombre(){
            return $this->nombre;
        }
        function getNotaFinal(){
            return $this->notaFinal;
        }

        function setNombre($nombre){
            $this->nombre=$nombre;
        }

        function setNotafinal($nota){
            $this->notaFinal=$nota;
        }

        function aprobar(){
            if ($this->notaFinal >= 6) {
                return "El estudiante $this->nombre ha aprobado con una nota final de $
                $this->notaFinal.";
            } else {
                return "El estudiante $this->nombre ha reprobado con una nota final de $
                $this->notaFinal.";
            }
        }
    }
    $estudiante1=new Estudiante("Juan", 7);
    $estudiante2=new Estudiante("Carmen",4);

    echo $estudiante1->aprobar();
    echo $estudiante2->aprobar();
?>