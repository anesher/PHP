//Crea una clase llamada Libro con propiedades ơtulo, autor y año. Crea un método que imprima la
información del libro.

<?php
    class Libro{
        private string $titulo;
        private string $autor;
        private int $año;

        function __construct(string $titulo, string $autor, int $año)
        {
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->año=$año;
        }
        function imprimir(){
            echo "El libro $this->titulo fue escrito por $this->autor en el año
            $this->año.";
        }
    }
    $libro1=new Libro("Hola","Miguel",55);
    echo $libro1->imprimir();
?>