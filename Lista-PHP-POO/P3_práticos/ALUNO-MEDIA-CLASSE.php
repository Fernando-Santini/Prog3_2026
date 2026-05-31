<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->setNota1($nota1);
        $this->setNota2($nota2);
    }

    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }

    public function getNota1() { return $this->nota1; }
    public function setNota1($nota1) {
        if ($nota1 >= 0 && $nota1 <= 10) $this->nota1 = $nota1;
    }

    public function getNota2() { return $this->nota2; }
    public function setNota2($nota2) {
        if ($nota2 >= 0 && $nota2 <= 10) $this->nota2 = $nota2;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao() {
        $media = $this->calcularMedia();
        if ($media >= 5) {
            echo "{$this->nome}: Aprovado, média :{$media}<br>";
        } else {
            echo "{$this->nome}: Reprovado, média :{$media}<br>";
        }
    }
}

$aluno = new Aluno("Dejair", 7.5, 6.0);
$aluno->situacao();
?>