<?php
class Funcionario
{
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario)
    {
        $this->setNome($nome);
        $this->setCargo($cargo);
        $this->setSalario($salario);
    }

    public function setNome($nome)
    {
        $nome = trim($nome);
        if (empty($nome)) {
            throw new Exception("O nome não pode ser vazio.");
        }
        $this->nome = $nome;
    }

    public function setCargo($cargo)
    {
        $cargo = trim($cargo);
        if (empty($cargo)) {
            throw new Exception("O cargo não pode ser vazio.");
        }
        $this->cargo = $cargo;
    }

    public function setSalario($salario)
    {
        if (!is_numeric($salario) || $salario <= 0) {
            throw new Exception("O salário deve ser um número maior que zero.");
        }
        $this->salario = $salario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function aumentarSalario($percentual)
    {
        if (!is_numeric($percentual) || $percentual < 0) {
            echo "Erro: O percentual deve ser um número não negativo. Entrada: ".$percentual."<br>";
            return false;
        }
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
        echo "Aumento de " . $percentual . "% aplicado. Novo salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
        return true;
    }

    public function exibirInformacoes()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br><br>";
    }
}


$funcionario = new Funcionario("Fernando", "Design", 3000.00);

echo "<h2>Informações Básicas</h2>";
$funcionario->exibirInformacoes();

echo "<h2>Aumentos</h2>";
$funcionario->aumentarSalario(10);
$funcionario->aumentarSalario(5);
$funcionario->aumentarSalario(-2);

echo "<h2>Após Aumentos</h2>";
$funcionario->exibirInformacoes();

?>