<?php
class funcionario{
    public $nome;
    public $salario;

    public function calcularbonus() {
        return $this->salario * 0.10;
    }
    public function exibirDados() {
        $dados = "";
        $dados .= "Nome: " . $this->nome . "<br>";
        $dados .= "Salário: R$ " . $this->salario . "<br>";
        $dados .= "Bônus: R$ " . $this->calcularbonus() . "<br>";

        if (isset($this->departamento)) {
            $dados .= "Departamento: " . $this->departamento . "<br>";
        }

        if (isset($this->liguagem)) {
            $dados .= "Linguagem: " . $this->liguagem . "<br>";
        }

        return $dados . "<br>";
    }
}


class gerente extends funcionario {
    public $departamento;

    public function calcularbonus() {
        return $this->salario * 0.20;
    }
}
class programador extends funcionario {
    public $liguagem;

    public function calcularbonus() {
        return $this->salario * 0.15;
    }
}

$funcionario1 = new funcionario();
$funcionario1->nome = "Dejair da Silva";
$funcionario1->salario = 3000;
echo "Funcionário<br>";
echo $funcionario1->exibirDados();

$gerente1 = new gerente();
$gerente1->nome = "Dejair da Silva Filho";
$gerente1->salario = 5000;
$gerente1->departamento = "Vendas";

echo "Gerente<br>";
echo $gerente1->exibirDados();

$programador1 = new programador();
$programador1->nome = "Dejair da Silva Neto";
$programador1->salario = 4000;
$programador1->liguagem = "PHP";

echo "Programador<br>";
echo $programador1->exibirDados();
