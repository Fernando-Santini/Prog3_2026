<?php
class Conta
{
    public $numero;
    public $titular;
    public $saldo;
    public $taxajuros;
    public function depositar($valor)
    {
        $this->saldo += $valor;
        echo "Depósito de R$ " . $valor . " realizado com sucesso!" . "<br>";
    }
    public function sacar($valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque!" . "<br>";
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$ " . $valor . " realizado com sucesso!" . "<br>";
        }
    }
    public function calcularJuros()
    {
        $juros = $this->saldo * $this->taxajuros;
        echo "O valor dos juros é: R$ " . $juros . "<br>";
    }
    public function exibirSaldo()
    {
        echo "O saldo atual da conta é: R$ " . $this->saldo . "<br>";
    }
}
$conta1 = new Conta();
$conta1->numero = "12345-6";
$conta1->titular = "Maria Silva";
$conta1->saldo = 1000;
$conta1->taxajuros = 0.05;
echo "Número da conta: " . $conta1->numero . "<br>";
echo "Titular da conta: " . $conta1->titular . "<br>";
echo "Saldo da conta: R$ " . $conta1->saldo . "<br>";
echo "Taxa de juros: " . ($conta1->taxajuros * 100) . "%<br>";
$conta1->depositar(500);
$conta1->exibirSaldo();
$conta1->sacar(200);
$conta1->exibirSaldo();
$conta1->calcularJuros();
$conta1->exibirSaldo();
