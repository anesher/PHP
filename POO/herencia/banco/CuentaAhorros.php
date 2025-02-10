<?php
    include_once("CuentaBancaria.php");
    class CuentaAhorros extends CuentaBancaria{
        public function __construct($saldo)
        {
            parent::__construct($saldo);
        }
        function mostrarSaldo(){
            parent::mostrarSaldo();
        }
    }
    $objCuentaAhorros=new CuentaAhorros(1000);
    $objCuentaAhorros->mostrarSaldo();
?>