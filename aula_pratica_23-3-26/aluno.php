<?php
class Aluno{
    public $nome;
    public $matricula;
    public $media_notas;
    public $situação;

    public function estudar(){
        echo "O aluno está estudando<br><br>";
    }
    public function assistirAula(){
        echo "O aluno ". $this->nome. " está assistindo aula<br><br>";
    }
    public function fazerProva(){
        echo "O aluno " . $this->nome. " está fazendo prova<br><br>";
    }
    public function calcularSituacao(){
        if($this->media_notas >= 7){
            $this->situação = "Aprovado";
        } else {
            $this->situação = "Reprovado";
        }
        echo "A situação do aluno é: " . $this->situação . "<br><br>";
    }
}
echo "<h1>Aluno 1</h1>";
$aluno1 = new Aluno();
$aluno1->nome = "Maria Souza";
$aluno1->matricula = "2023001";
$aluno1->media_notas = 8.5;
echo "O aluno tem o nome: " . $aluno1->nome . "<br>";
echo "O aluno tem a matrícula: " . $aluno1->matricula . "<br>";
echo "O aluno tem a média das notas: " . $aluno1->media_notas . "<br><br>";
$aluno1->estudar();
$aluno1->assistirAula();
$aluno1->fazerProva();
$aluno1->calcularSituacao();
echo "<h1>Aluno 2</h1>";
$aluno2 = new Aluno();
$aluno2->nome = "Pedro Lima";
$aluno2->matricula = "2023002";
$aluno2->media_notas = 5.0;
echo "O aluno tem o nome: " . $aluno2->nome . "<br>";
echo "O aluno tem a matrícula: " . $aluno2->matricula . "<br>";
echo "O aluno tem a média das notas: " . $aluno2->media_notas . "<br><br>";
$aluno2->estudar();
$aluno2->assistirAula();
$aluno2->fazerProva();
$aluno2->calcularSituacao();