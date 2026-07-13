<?php
abstract class Funcionario{
    protected string $nome;
    protected string $departamento;
    public function __construct(string $nome, string $departamento){
        $this->nome = $nome;
        $this->departamento = $departamento;
    }
    abstract public function calcularSalario(): float;
    public function apresentar(): string{
        return "Funcionario: {$this->nome} | Departamento: {$this->departamento} | Salário: " . $this->calcularSalario();
    }
}
class CLT extends Funcionario{
    public function __construct(
        private float $salarioBase,
        string $nome,
        string $departamento
    ){
        parent::__construct($nome, $departamento);
    }
    public function calcularSalario(): float{
        return $this->salarioBase * 1.0833;
    }
}
class Freelancer extends Funcionario{
    public function __construct(
        private float $valorHora,
        private int $horasTrabalhadas,
        string $nome,
        string $departamento
    ){
        parent::__construct($nome, $departamento);
    }

    public function calcularSalario(): float{
        return $this->valorHora * $this->horasTrabalhadas;
    }
}
$clt = new CLT(2000.0, 'Ana', 'RH');
echo $clt->apresentar();
echo "<br>";
$freelancer = new Freelancer(50.0, 120, 'Bruno', 'Desenvolvimento');
echo $freelancer->apresentar();
