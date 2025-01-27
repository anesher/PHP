// Crea una clase Rectangulo con las propiedades base y altura. Crea un método area() que calcule el
área del rectángulo. Luego, crea un método perimetro() que calcule el perímetro del rectángulo.

<?php
// Clase Rectangulo
    class Rectangulo{
        // Propiedades
        private  int $base;
        private int $altura;
        //Constructor
        public function __construct(int $base, int $altura)
        {
            $this->base=$base;
            $this->altura=$altura;
        }
        // get
        public function getBase()
        {
            return $this->base;
        }
        public function getAltura()
        {
            return $this->altura;
        }
        //set
        public function setBase($base)
        {
            $this->base=$base;
        }
        public function setAltura($altura)
        {
            $this->altura=$altura;
        }
        //Método area()
        public function area()
        {
            return $this->base * $this->altura;
        }
        //Método perimetro()
        public function perimetro()
        {
            return 2 * ($this->base + $this->altura);
        }
    }
    $rectangulo=new Rectangulo(55,55);
    echo "El área del rectángulo es: " . $rectangulo->area()
    . "\n";
    echo "El perímetro del rectángulo es: " . $rectangulo->perimetro();
?>