//Crea una clase llamada Fruta con propiedades nombre, color y peso. Crea un método informacion()
que devuelva una cadena con la información completa de la fruta (nombre, color y peso).
<?php
 class Fruta{
    private $nombre;
    private $color;
    private $peso;

    function __construct($nombre, $color, $peso){
        $this->nombre = $nombre;
        $this->color = $color;
        $this->peso = $peso;
    }
    function informacion(){
        return "La fruta es $this->nombre, su color es $this->color y
        pesa $this->peso gramos.";
        }
 }

 $fruta1=new Fruta("Manzana", "Rojo", 150);
 $fruta2=new Fruta("Platano", "Amarillo", 120);
 $fruta3=new Fruta("Naranja", "Naranja", 180);
 echo $fruta1->informacion()."<br>";
 echo $fruta2->informacion()."<br>";
 echo $fruta3->informacion();
?>