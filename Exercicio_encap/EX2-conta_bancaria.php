<?php
class ContaBancaria
{
    private $titular;
    private $saldo;

    public function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
        } else {
            echo "<strong>Erro:</strong> Valor de depósito deve ser positivo. Não pode ser: R$".$valor."<br>";
        }
    }

    public function sacar($valor)
    {
        if ($valor <= 0) {
            echo "<strong>Erro:</strong> Valor de saque deve ser positivo. Não pode ser: R$".$valor."<br>";
        } elseif ($valor > $this->saldo) {
            echo "<strong>Erro:</strong> Saldo insuficiente para saque de R$ " . number_format($valor, 2, ',', '.') . ". Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . ".<br>";
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso.<br>";
        }
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function getTitular()
    {
        return $this->titular;
    }
}

$conta = new ContaBancaria("João Silva");

echo "<h2>Conta de: " . $conta->getTitular() . "</h2>";
echo "Saldo inicial: R$ " . number_format($conta->consultarSaldo(), 2, ',', '.') . "<br><br>";

$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(400);
$conta->depositar(-100);
$conta->sacar(0);
echo "<br>Saldo final: R$ " . number_format($conta->consultarSaldo(), 2, ',', '.') . "<br>";
?>