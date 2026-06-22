<?php
class funcionario{
    public $nome;
    public $salario;

    public function calcularbonus() {
        return $this->salario * 0.10;
    }
}

class gerente extends funcionario {
    public $departamento;
}
class programador extends funcionario {
    public $liguagem;
}

//novo funcionario
$funcionario1 = new funcionario();
$funcionario1->nome = "Dejair da Silva";
$funcionario1->salario = 3000;
echo "Funcionário: " . $funcionario1->nome . "<br>";
echo "Salário: R$ " . $funcionario1->salario . "<br>";
echo "Bônus: R$ " . $funcionario1->calcularbonus() . "<br><br>";

//novo gerente
$gerente1 = new gerente();
$gerente1->nome = "Dejair da Silva Filho";
$gerente1->salario = 5000;
$gerente1->departamento = "Vendas";

echo "Gerente: " . $gerente1->nome . "<br>";
echo "Salário: R$ " . $gerente1->salario . "<br>";
echo "Departamento: " . $gerente1->departamento . "<br>";

echo "Bônus: R$ " . $gerente1->calcularbonus() . "<br><br>";

//novo programador
$programador1 = new programador();
$programador1->nome = "Dejair da Silva Neto";
$programador1->salario = 4000;
$programador1->liguagem = "PHP";
echo "Programador: " . $programador1->nome . "<br>";
echo "Salário: R$ " . $programador1->salario . "<br>";
echo "Linguagem: " . $programador1->liguagem . "<br>";
echo "Bônus: R$ " . $programador1->calcularbonus() . "<br><br>";