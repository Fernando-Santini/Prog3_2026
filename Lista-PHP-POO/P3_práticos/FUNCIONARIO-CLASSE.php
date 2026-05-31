<?php
class Funcionario {
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getNome() { return $this->nome; }
    public function getCargo() { return $this->cargo; }
    public function getSalario() { return $this->salario; }

    public function aumentarSalario($percentual) {
        if ($percentual > 0) {
            $this->salario += $this->salario * ($percentual / 100);
        }
    }

    public function exibir() {
        echo "Funcionário: {$this->nome} | Cargo: {$this->cargo} | Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}

$f = new Funcionario("Dejair", "Desenvolvedor", 40000.00);
echo "Antes do aumento:<br>";
$f->exibir();

$f->aumentarSalario(15);

echo "Depois do aumento:<br>";
$f->exibir();
?>