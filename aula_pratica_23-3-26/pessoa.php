<?php
class Pessoa{
    public $nome;
    public $idade;
    public $gênero;
    public function falar(){
        echo "" . $this->nome . " está falando";
    }
    public function comer(){
        echo "" . $this->nome . " está comendo";
    }
    public function dormir(){
        echo "" . $this->nome . " está dormindo";
    }
    public function calc_ano_nasc(){
        $anoAtual = date("Y");
        $anoNascimento = $anoAtual - $this->idade;
        echo "" . $this->nome . " nasceu em: " . $anoNascimento . "<br>";
    }
    public function calculo_dias_vida(){
        $diasVida = $this->idade * 365;
        echo "" . $this->nome . " viveu aproximadamente: " . $diasVida . " dias <br>";
    }
}
echo "<h1>Pessoa 1</h1>";
$pessoa1 = new Pessoa();
$pessoa1->nome = "Maria";
$pessoa1->idade = 30;
$pessoa1->gênero = "Feminino";
echo "A pessoa tem o nome: " . $pessoa1->nome . "<br>";
echo "A pessoa tem a idade: " . $pessoa1->idade . "<br>";
echo "A pessoa tem o gênero: " . $pessoa1->gênero . "<br><br>";
$pessoa1->falar();
echo "<br>";
$pessoa1->comer();
echo "<br>";
$pessoa1->dormir();
echo "<br>";
$pessoa1->calc_ano_nasc();
echo "<br>";
$pessoa1->calculo_dias_vida();
echo "<h1>Pessoa 2</h1>";
$pessoa2 = new Pessoa();
$pessoa2->nome = "Carlos";
$pessoa2->idade = 25;
$pessoa2->gênero = "Masculino";
echo "A pessoa tem o nome: " . $pessoa2->nome . "<br>";
echo "A pessoa tem a idade: " . $pessoa2->idade . "<br>";
echo "A pessoa tem o gênero: " . $pessoa2->gênero . "<br><br>";
$pessoa2->falar();
echo "<br>";
$pessoa2->comer();
echo "<br>";
$pessoa2->dormir();
echo "<br>";
$pessoa2->calc_ano_nasc();
echo "<br>";
$pessoa2->calculo_dias_vida();