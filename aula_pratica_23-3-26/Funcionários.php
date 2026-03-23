<?php
class Funcionario
{
    public $nome;
    public $cargo;
    public $salario;
    public $dataAdmissao;
    public function trabalhar()
    {
        echo "O funcionário está trabalhando" . "<br>";
    }
    public function descansar()
    {
        echo "O funcionário está descansando" . "<br>";
    }
    public function receberSalario()
    {
        echo "O funcionário está recebendo o salário" . "<br>";
    }
    public function calculosalárioanual()
    {
        $salarioAnual = $this->salario * 12;
        echo "O salário anual do funcionário" . $this->nome. " é: " . $salarioAnual . "<br>";
    }
}
echo "<h1>Funcionário 1</h1>";
$funcionario1 = new Funcionario();
$funcionario1->nome = "João Silva";
$funcionario1->cargo = "Analista de Sistemas";
$funcionario1->salario = 5000;
$funcionario1->dataAdmissao = "01/01/2020";
echo "O funcionário tem o nome: " . $funcionario1->nome . "<br>";
echo "O funcionário tem o cargo: " . $funcionario1->cargo . "<br>";
echo "O funcionário tem o salário: " . $funcionario1->salario . "<br>";
echo "O funcionário tem a data de admissão: " . $funcionario1->dataAdmissao . "<br>";
$funcionario1->trabalhar();
$funcionario1->descansar();
$funcionario1->receberSalario();
$funcionario1->calculosalárioanual();