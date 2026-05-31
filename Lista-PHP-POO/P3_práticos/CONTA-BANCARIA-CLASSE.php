<?php
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular) {
        $this->titular = $titular;
        $this->saldo = 0; // Inicializado com 0
    }

    public function getTitular() { return $this->titular; }
    public function getSaldo() { return $this->saldo; }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saque inválido ou saldo insuficiente.<br>";
        }
    }
}

$conta = new ContaBancaria("Dejair");
$conta->depositar(500);
$conta->sacar(200);
echo "Saldo final do " . $conta->getTitular() . ": R$ " . $conta->getSaldo() . "<br>";
?>