<?php
    /*
    Crea una clase CuentaBancaria con un método mostrarSaldo(). Luego, crea una clase CuentaAhorros
    que herede de CuentaBancaria y uƟlice el método parent::mostrarSaldo() para mostrar el saldo.
    */
    class CuentaBancaria
    {
        private $saldo;
        public function __construct($saldo)
        {
            $this->saldo = $saldo;
        }
        public function getSaldo()
        {
            return $this->saldo;
        }
        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
        public function mostrarSaldo()
        {
            echo "El saldo de la cuenta es: " . $this->saldo;
        }
    }
?>