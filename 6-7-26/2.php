<?php
abstract class Forma {
    protected string $cor;
 
    public function __construct(string $cor) {
        $this->cor = $cor;
    }
 
    abstract public function calcularArea(): float;
 
    public function descricao(): string {
        return "Forma: " . static::class . " | Cor: " . $this->cor;
    }
}
 
class Circulo extends Forma {
    public function __construct(
        private float $raio,
        string $cor
    ) {
        parent::__construct($cor);
    }
 
    public function calcularArea(): float {
        return pi() * $this->raio ** 2;
    }
}
 
class Retangulo extends Forma {
    public function __construct(
        private float $largura,
        private float $altura,
        string $cor
    ) {
        parent::__construct($cor);
    }
 
    public function calcularArea(): float {
        return $this->largura * $this->altura;
    }
}
 
$c = new Circulo(5.0, "azul");
$r = new Retangulo(4.0, 6.0, "vermelho");
 
echo $c->descricao() . ' | Área: ' . number_format($c->calcularArea(), 2) . PHP_EOL; echo "<br>";
echo $r->descricao() . ' | Área: ' . number_format($r->calcularArea(), 2) . PHP_EOL;

