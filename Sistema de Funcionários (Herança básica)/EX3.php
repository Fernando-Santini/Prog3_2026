<?php
// Exercício 3 – Polimorfismo na prática (Lista de objetos)

class funcionario {
    public $nome;
    public $salario;

    public function calcularbonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        $tipo = get_class($this);
        $tipoFormatado = ucfirst(str_replace('funcionario', '', strtolower($tipo)));
        if ($tipo === 'gerente') {
            $tipoFormatado = 'Gerente';
        } elseif ($tipo === 'programador') {
            $tipoFormatado = 'Programador';
        }

        $saida = "Funcionario: {$this->nome} ({$tipoFormatado})<br>";
        $saida .= "Bônus: R$ " . $this->calcularbonus() . "<br><br>";
        return $saida;
    }
}

class gerente extends funcionario {
    public $departamento;

    public function calcularbonus() {
        return $this->salario * 0.20;
    }
}

class programador extends funcionario {
    public $linguagem;

    public function calcularbonus() {
        return $this->salario * 0.15;
    }
}

$lista = [];

$lista[] = (function () {
    $g = new gerente();
    $g->nome = "João";
    $g->salario = 10000;
    $g->departamento = "Vendas";
    return $g;
})();

$lista[] = (function () {
    $d = new programador();
    $d->nome = "Maria";
    $d->salario = 8000;
    $d->linguagem = "PHP";
    return $d;
})();

$lista[] = (function () {
    $g = new gerente();
    $g->nome = "Carlos";
    $g->salario = 6000;
    $g->departamento = "RH";
    return $g;
})();

$lista[] = (function () {
    $d = new programador();
    $d->nome = "Ana";
    $d->salario = 7000;
    $d->linguagem = "JavaScript";
    return $d;
})();

foreach ($lista as $obj) {
    echo $obj->exibirDados();
    echo "Bônus (calcularbonus): R$ " . $obj->calcularbonus() . "<br><hr>";
}

