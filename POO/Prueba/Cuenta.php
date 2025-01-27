//Crea una clase llamada Cuenta que tenga las siguientes propiedades: titular y saldo. Crea un método
depositar($monto) que permita agregar dinero al saldo, y un método retirar($monto) que permita
retirar dinero si hay suficiente saldo.
<?php
// clase cuenta para depositar y retirar saldo
class Cuenta {
    // propiedades de la clase
    private  string $titular;
    private int $saldo;

    public function __construct(string $titular, int $saldo){
        $this->titular=$titular;
        if($saldo<0){
            throw new ErrorException("no se puede tener saldo negativo");
        }else{
            $this->saldo=$saldo;
        }
    
    }
    
    // funciones get
    public function getTitular(){
        return $this->titular;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    //funciones set
    public function setTitular($titular){
        $this->titular=$titular;
        }
    public function setSaldo($saldo){
        $this->saldo=$saldo;
    }

    // método para depositar dinero
    public function depositar($monto){
        if($monto<0){
            throw new ErrorException("no se puede depositar un monto negativo");
        }else{
            $this->saldo+=$monto;
            return $this->saldo;
        }
    }
    // método para retirar dinero
    public function retirar($monto){
        if($monto<0){
            throw new ErrorException("no se puede retirar un monto negativo");
        }else{
            if($monto>$this->saldo){
                throw new ErrorException("no hay suficiente saldo");
            }else{
                    $this->saldo-=$monto;
                    return $this->saldo;
                }
        }
    }
}
$objsueldo=new Cuenta("Juan",100);
$objsueldo->depositar(22);
$objsueldo->retirar(4);

echo $objsueldo->getSaldo();
?>