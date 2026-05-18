<?php
class Aluno
{
    private $nome;
    private $nota1;
    private $nota2;

    public function setNome($nome)
    {
        $nome = trim($nome);
        if (empty($nome)) {
            echo "Erro: O nome não pode ser vazio.<br>";
            return false;
        } else {
            $this->nome = $nome;
            return true;
        }
    }

    public function setNota1($nota)
    {
        if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
            echo "Erro: Nota1 deve ser um número entre 0 e 10, não pode ser(" . $nota . ").<br>";
            return false;
        } else {
            $this->nota1 = $nota;
            return true;
        }
    }

    public function setNota2($nota)
    {
        if (!is_numeric($nota) || $nota < 0 || $nota > 10) {
            echo "Erro: Nota2 deve ser um número entre 0 e 10, não pode ser(" . $nota . ").<br>";
            return false;
        } else {
            $this->nota2 = $nota;
            return true;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNota1()
    {
        return $this->nota1;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function calcularMedia()
    {
        if ($this->nota1 !== null && $this->nota2 !== null) {
            return round(($this->nota1 + $this->nota2) / 2, 2);
        }
        return null;
    }

    public function verificarSituacao()
    {
        $media = $this->calcularMedia();
        if ($media === null) {
            return "Dados incompletos";
        } elseif ($media >= 7) {
            return "Aprovado";
        } elseif ($media >= 5) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }
    }

    public function mostrarInformacoes()
    {
        echo "Nome: " . $this->nome . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Média: " . $this->calcularMedia() . "<br>";
        echo "Situação: " . $this->verificarSituacao() . "<br><br>";
    }
}

$aluno1 = new Aluno();
$aluno1->setNome("Bruno");
$aluno1->setNota1(8.5);
$aluno1->setNota2(7.0);
$aluno1->mostrarInformacoes();

$aluno2 = new Aluno();
$aluno2->setNome("Lorenzo");
$aluno2->setNota1(5.5);
$aluno2->setNota2(6.0);
$aluno2->mostrarInformacoes();

$aluno3 = new Aluno();
$aluno3->setNome("Wanderlei");
$aluno3->setNota1(4.0);
$aluno3->setNota2(3.5);
$aluno3->mostrarInformacoes();
?>