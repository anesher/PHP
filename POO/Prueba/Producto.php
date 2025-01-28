// Crea una clase Producto con propiedades nombre, precio y stock. Crea un método
agregarStock($canƟdad) que aumente la canƟdad de stock disponible, y un método
vender($canƟdad) que disminuya el stock cuando se realiza una venta (asegurándote de que no se
pueda vender más de lo que hay en stock).

<?php
    class Producto {
        private $nombre;
        private $precio;
        private $stock;
        function __construct($nombre,$precio,$stock)
        {
            $this->nombre=$nombre;
            $this->precio=$precio;
            $this->stock=$stock;
        }
        function agregarStock($cantidad)
        {
            $this->stock += $cantidad;
            return $this->stock;
            }

        function vender($cantidad){
            if ($cantidad <= $this->stock) {
                $this->stock -= $cantidad;
                return $this->stock;
            }
        }
    }
    $producto1=new Producto("Camisa", 100, 10);
    $producto1->agregarStock(5);
    $producto1->vender(3);
    
?>