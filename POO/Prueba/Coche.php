//Crea una clase llamada Coche con al menos 5 propiedades. Luego, crea un objeto de la clase y asigna
valores a las propiedades a través del constructor.
<?php
 // clase que define un coche 
class Coche{
    //atributos de la clae
    private $id;
    private $marca;
    private $modelo;
    private $ruedas;
    private $color;

    //constructor
    public function __construct($id, $marca, $modelo, $ruedas, $color){
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ruedas = $ruedas;
        $this->color = $color;

    }

    //metodos de las clases get para cogerlos
     public function getRuedas(){
        return $this->ruedas;
    }
    public function getId(){
        return $this->id;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getColor(){
        return $this->color;
    }

    //metodo para meter valor a la ruedas que es un atributo privado
    public function setRuedas($num){
        $this->ruedas = $num;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
}

function listarCoche(Coche $coche){
    echo "<div style='border: 1px solid #000; padding: 10px; width: 300px;'>";
    echo "<h3>Detalles del Coche</h3>";
    echo "<p><strong>ID:</strong> " . $coche->getId() . "</p>";
    echo "<p><strong>Ruedas:</strong> " . $coche->getRuedas() . "</p>";
    echo "<p><strong>Marca:</strong> " . $coche->getMarca() . "</p>";
    echo "<p><strong>Modelo:</strong> " . $coche->getModelo() . "</p>";
    echo "<p><strong>Color:</strong> " . $coche->getColor() . "</p>";
    echo "</div>";
}
    
    $objcoche1=new Coche(1,"Ford", "Fiesta",4,"Rojo");
    $objcoche2=new Coche(2,"Honda","Civic",4,"Blanco");
    $objcoche3=new Coche(3, "Audi","A4",4,"negro");
    

    
    listarCoche($objcoche1);
    listarCoche($objcoche2);
    listarCoche($objcoche3);

    /*$objcoche1->setId(1);
    $objcoche1->setRuedas(4);
    $objcoche1->setColor("Rojo");
    $objcoche1->setModelo("Fiesta");
    $objcoche1->setMarca("Ford");

    $objcoche2->setID(2);
    $objcoche2->setColor("Blanco");
    $objcoche2->setModelo("Civic");
    $objcoche2->setRuedas(4);
    $objcoche2->setMarca("Honda");

    $objcoche3->setId(3);
    $objcoche3->setColor("Negro");
    $objcoche3->setModelo("A4");
    $objcoche3->setRuedas(4);
    $objcoche3->setMarca("Audi");*/

?>